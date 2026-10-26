<?php
declare(strict_types=1);

final class RboPdfReport
{
  private const PAGE_WIDTH = 595;
  private const PAGE_HEIGHT = 842;
  private const LEFT = 38;
  private const RIGHT = 557;
  private const FOOTER_TOP = 810;
  private array $pages = [];
  private string $currentPage = '';
  private float $cursorY = 0;
  private int $pageNumber = 0;
  private string $companyName = '';

  public function render(array $sections): string
  {
    $applicant = $sections['Person submitting this form'] ?? [];
    $shareholder1 = $sections['Shareholder 1'] ?? [];
    $shareholder2 = $sections['Shareholder 2'] ?? [];
    $otherControl = $sections['Other control']['Other person or company with control'] ?? '';
    $this->companyName = (string) ($applicant['Company name'] ?? 'Company not provided');

    $this->newPage(true);
    $this->drawCompanyCard($applicant);
    $this->cursorY = 278;
    $shareholderTop = $this->cursorY;
    $cardWidth = 250;
    $gap = 19;
    $leftBottom = $this->drawShareholderCard(self::LEFT, $shareholderTop, $cardWidth, 'Shareholder 1', $shareholder1);
    $rightBottom = $this->drawShareholderCard(self::LEFT + $cardWidth + $gap, $shareholderTop, $cardWidth, 'Shareholder 2', $shareholder2);
    $this->cursorY = max($leftBottom, $rightBottom) + 18;
    $this->drawOtherControl((string) $otherControl);
    $this->pages[] = $this->currentPage . $this->footer();

    return $this->assemblePdf($this->pdfObjects());
  }

  private function newPage(bool $first = false): void
  {
    if ($this->pageNumber > 0) {
      $this->pages[] = $this->currentPage . $this->footer();
    }
    $this->pageNumber++;
    $this->currentPage = $this->rectangle(0, 0, self::PAGE_WIDTH, self::PAGE_HEIGHT, '1 1 1');
    if ($first) {
      $this->currentPage .= $this->rectangle(0, 0, self::PAGE_WIDTH, 102, '0.02 0.13 0.27')
        . $this->rectangle(0, 98, self::PAGE_WIDTH, 4, '0.03 0.39 0.78')
        . $this->text(38, 35, 9, 'F2', 'COMPANIES FORMATION  /  BENEFICIAL OWNERSHIP', '0.48 0.91 0.87')
        . $this->text(38, 68, 22, 'F2', 'RBO Registration Report', '1 1 1')
        . $this->text(38, 87, 8, 'F1', 'CONFIDENTIAL  ·  Received ' . date('j M Y, H:i T'), '0.84 0.9 0.97');
      $this->cursorY = 122;
      return;
    }

    $this->currentPage .= $this->rectangle(self::LEFT, 34, self::RIGHT - self::LEFT, 42, '0.02 0.13 0.27')
      . $this->text(52, 52, 10, 'F2', 'RBO Registration  /  ' . $this->companyName, '1 1 1')
      . $this->text(52, 67, 8, 'F1', 'CONFIDENTIAL  ·  Continued', '0.84 0.9 0.97');
    $this->cursorY = 100;
  }

  private function drawCompanyCard(array $fields): void
  {
    $cardHeight = 140;
    $this->currentPage .= $this->rectangle(self::LEFT, $this->cursorY, self::RIGHT - self::LEFT, $cardHeight, '0.95 0.97 1')
      . $this->rectangle(self::LEFT, $this->cursorY, 4, $cardHeight, '0.03 0.39 0.78')
      . $this->text(self::LEFT + 16, $this->cursorY + 19, 9, 'F2', 'COMPANY AND SUBMISSION DETAILS', '0.03 0.39 0.78')
      . $this->text(self::LEFT + 16, $this->cursorY + 43, 8, 'F2', 'COMPANY', '0.35 0.42 0.51')
      . $this->text(self::LEFT + 16, $this->cursorY + 64, 14, 'F2', $this->fitText((string) ($fields['Company name'] ?? 'Not provided'), 68))
      . $this->rectangle(self::LEFT + 16, $this->cursorY + 75, self::RIGHT - self::LEFT - 32, 1, '0.82 0.87 0.93');

    $columns = [
      ['SUBMITTED BY', (string) ($fields['Name'] ?? 'Not provided'), self::LEFT + 16, 9, 34],
      ['EMAIL ADDRESS', (string) ($fields['Email address'] ?? 'Not provided'), self::LEFT + 184, 8, 54],
      ['PHONE NUMBER', (string) ($fields['Phone number'] ?? 'Not provided'), self::LEFT + 365, 9, 34],
    ];
    foreach ($columns as [$label, $value, $x, $fontSize, $limit]) {
      $this->currentPage .= $this->text($x, $this->cursorY + 94, 7, 'F2', $label, '0.35 0.42 0.51')
        . $this->text($x, $this->cursorY + 115, $fontSize, 'F2', $this->fitText($value, $limit));
    }
    $this->cursorY += $cardHeight;
  }

  private function drawShareholderCard(float $x, float $top, float $width, string $title, array $fields): float
  {
    $details = $this->shareholderFields($fields);
    $rows = [];
    $cardHeight = 37;
    foreach ($details as [$label, $value]) {
      $wrapped = $this->wrap($value, 40);
      $rowHeight = max(34, 15 + count($wrapped) * 11);
      $rows[] = [$label, $wrapped, $rowHeight];
      $cardHeight += $rowHeight;
    }
    $cardHeight += 10;
    $this->currentPage .= $this->rectangle($x, $top, $width, $cardHeight, '0.97 0.98 1')
      . $this->rectangle($x, $top, $width, 35, '0.02 0.13 0.27')
      . $this->rectangle($x, $top, 4, 35, '0.03 0.39 0.78')
      . $this->text($x + 13, $top + 23, 11, 'F2', $title, '1 1 1');

    $rowTop = $top + 39;
    foreach ($rows as [$label, $wrapped, $rowHeight]) {
      $this->currentPage .= $this->rectangle($x + 8, $rowTop, $width - 16, $rowHeight - 2, '1 1 1')
        . $this->text($x + 16, $rowTop + 12, 7, 'F2', strtoupper($label), '0.27 0.39 0.54');
      foreach ($wrapped as $lineIndex => $line) {
        $this->currentPage .= $this->text($x + 16, $rowTop + 25 + ($lineIndex * 11), 8, 'F1', $line);
      }
      $rowTop += $rowHeight;
    }

    return $top + $cardHeight;
  }

  private function shareholderFields(array $fields): array
  {
    $name = trim((string) ($fields['Name'] ?? ''));
    if ($name === '' && trim((string) ($fields['PPS number'] ?? '')) === '') {
      return [['Status', 'No additional shareholder provided']];
    }

    return [
      ['Name', $name],
      ['PPS number', (string) ($fields['PPS number'] ?? '')],
      ['Address', trim((string) ($fields['Address line 1'] ?? '') . ' ' . (string) ($fields['Address line 2'] ?? ''))],
      ['Shareholding', (string) ($fields['Percentage of shares'] ?? '')],
      ['Date appointed', (string) ($fields['Date appointed'] ?? '')],
      ['Nature of interest', (string) ($fields['Nature of interest'] ?? '')],
      ['Ownership type', (string) ($fields['Ownership type'] ?? '')],
    ];
  }

  private function drawOtherControl(string $value): void
  {
    $value = trim($value) !== '' ? trim($value) : 'No other person or company with control was declared.';
    $lines = $this->wrap($value, 92);
    $this->sectionHeader('OTHER CONTROL', $this->cursorY);
    $this->cursorY += 30;

    foreach ($lines as $line) {
      if ($this->cursorY + 23 > self::FOOTER_TOP - 8) {
        $this->newPage();
        $this->sectionHeader('OTHER CONTROL  /  CONTINUED', $this->cursorY);
        $this->cursorY += 30;
      }
      $this->currentPage .= $this->rectangle(self::LEFT, $this->cursorY, self::RIGHT - self::LEFT, 22, '0.97 0.98 1')
        . $this->text(self::LEFT + 12, $this->cursorY + 15, 9, 'F1', $line);
      $this->cursorY += 24;
    }
  }

  private function sectionHeader(string $title, float $top): void
  {
    $this->currentPage .= $this->rectangle(self::LEFT, $top, self::RIGHT - self::LEFT, 24, '0.92 0.96 0.99')
      . $this->rectangle(self::LEFT, $top, 4, 24, '0.03 0.39 0.78')
      . $this->text(self::LEFT + 12, $top + 16, 9, 'F2', $title, '0.02 0.24 0.47');
  }

  private function footer(): string
  {
    return $this->rectangle(self::LEFT, self::FOOTER_TOP - 5, self::RIGHT - self::LEFT, 1, '0.85 0.89 0.94')
      . $this->text(self::LEFT, self::FOOTER_TOP + 9, 7, 'F1', 'Confidential submission  ·  Handle and store securely', '0.35 0.42 0.51')
      . $this->text(self::RIGHT - 48, self::FOOTER_TOP + 9, 7, 'F2', 'Page ' . $this->pageNumber, '0.35 0.42 0.51');
  }

  private function wrap(string $value, int $limit): array
  {
    $value = trim($value) !== '' ? trim($value) : 'Not provided';
    $lines = [];
    foreach (preg_split('/\R/u', $value) ?: [$value] as $paragraph) {
      $currentLine = '';
      $words = preg_split('/\s+/u', trim($paragraph), -1, PREG_SPLIT_NO_EMPTY) ?: [];
      foreach ($words as $word) {
        while (mb_strlen($word, 'UTF-8') > $limit) {
          $part = mb_substr($word, 0, $limit, 'UTF-8');
          $word = mb_substr($word, $limit, null, 'UTF-8');
          if ($currentLine !== '') {
            $lines[] = $currentLine;
            $currentLine = '';
          }
          $lines[] = $part;
        }
        $wordLength = mb_strlen($word, 'UTF-8');
        if ($currentLine !== '' && mb_strlen($currentLine, 'UTF-8') + $wordLength + 1 > $limit) {
          $lines[] = $currentLine;
          $currentLine = '';
        }
        $currentLine = $currentLine === '' ? $word : $currentLine . ' ' . $word;
      }
      if ($currentLine !== '') {
        $lines[] = $currentLine;
      }
    }

    return $lines === [] ? ['Not provided'] : $lines;
  }

  private function fitText(string $value, int $limit): string
  {
    if (mb_strlen($value, 'UTF-8') <= $limit) {
      return $value;
    }

    return mb_substr($value, 0, $limit - 1, 'UTF-8') . '…';
  }

  private function rectangle(float $x, float $top, float $width, float $height, string $color): string
  {
    $bottom = self::PAGE_HEIGHT - $top - $height;
    return "q {$color} rg {$x} {$bottom} {$width} {$height} re f Q\n";
  }

  private function text(float $x, float $top, int $size, string $font, string $value, ?string $color = null): string
  {
    $converted = iconv('UTF-8', 'Windows-1252//TRANSLIT', $value);
    $converted = $converted === false ? '' : $converted;
    $escaped = str_replace(['\\', '(', ')', "\r", "\n"], ['\\\\', '\\(', '\\)', '', ''], $converted);
    $baseline = self::PAGE_HEIGHT - $top;
    $color ??= $font === 'F2' ? '0.02 0.13 0.27' : '0.22 0.29 0.38';

    return "BT /{$font} {$size} Tf {$color} rg 1 0 0 1 {$x} {$baseline} Tm ({$escaped}) Tj ET\n";
  }

  private function pdfObjects(): array
  {
    $objects = [
      1 => '<< /Type /Catalog /Pages 2 0 R >>',
      3 => '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica /Encoding /WinAnsiEncoding >>',
      4 => '<< /Type /Font /Subtype /Type1 /BaseFont /Helvetica-Bold /Encoding /WinAnsiEncoding >>',
    ];
    $pageIds = [];
    $nextId = 5;
    foreach ($this->pages as $pageContent) {
      $pageId = $nextId++;
      $contentId = $nextId++;
      $pageIds[] = $pageId . ' 0 R';
      $contentLength = strlen($pageContent);
      $objects[$pageId] = '<< /Type /Page /Parent 2 0 R /MediaBox [0 0 '
        . self::PAGE_WIDTH . ' ' . self::PAGE_HEIGHT
        . '] /Resources << /Font << /F1 3 0 R /F2 4 0 R >> >> /Contents '
        . $contentId . ' 0 R >>';
      $objects[$contentId] = "<< /Length {$contentLength} >>\nstream\n{$pageContent}endstream";
    }
    $objects[2] = '<< /Type /Pages /Kids [' . implode(' ', $pageIds) . '] /Count ' . count($pageIds) . ' >>';

    return $objects;
  }

  private function assemblePdf(array $objects): string
  {
    ksort($objects);
    $pdf = "%PDF-1.4\n%\xE2\xE3\xCF\xD3\n";
    $offsets = [0];
    $lastId = max(array_keys($objects));
    for ($id = 1; $id <= $lastId; $id++) {
      $offsets[$id] = strlen($pdf);
      $pdf .= "{$id} 0 obj\n" . $objects[$id] . "\nendobj\n";
    }
    $xrefOffset = strlen($pdf);
    $pdf .= "xref\n0 " . ($lastId + 1) . "\n0000000000 65535 f \n";
    for ($id = 1; $id <= $lastId; $id++) {
      $pdf .= sprintf("%010d 00000 n \n", $offsets[$id]);
    }
    $pdf .= "trailer\n<< /Size " . ($lastId + 1) . " /Root 1 0 R >>\nstartxref\n"
      . $xrefOffset . "\n%%EOF\n";

    return $pdf;
  }
}
