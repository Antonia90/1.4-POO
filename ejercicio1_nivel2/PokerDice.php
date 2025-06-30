<?php
declare(strict_types=1);

class PokerDice {
    private static array $faces = ["As", "K", "Q", "J", "7", "8"];
    private string $currentFace = "";
    private static int $totalThrows = 0;

    public function throw(): string {
        $this->currentFace = self::$faces[random_int(0, 5)];
        self::$totalThrows++;
        return $this->currentFace;
    }

    public function shapeName(): string {
        return $this->currentFace ?: "Aún no se ha lanzado el dado";
    }

    public static function getTotalThrows(): int {
        return self::$totalThrows;
    }
}

