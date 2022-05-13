
<?php

class MyDate
{
    public function echodate() {
        $date = (new DateTimeImmutable())->format('Y-m-d');
        echo $date;
    }
}
