<?php

class DateToTurkish
{

    /** @var string[]  */
    public $daysandmonths = [
        "Monday" => "Pazartesi",
        "Tuesday" => "Salı",
        "Wednesday" => "Çarşamba",
        "Thursday" => "Perşembe",
        "Friday" => "Cuma",
        "Saturday" => "Cumartesi",
        "Sunday" => "Pazar",
        "January" => "Ocak",
        "February" => "Şubat",
        "March" => "Mart",
        "April" => "Nisan",
        "May" => "Mayıs",
        "June" => "Haziran",
        "July" => "Temmuz",
        "August" => "Ağustos",
        "September" => "Eylül",
        "October" => "Ekim",
        "November" => "Kasım",
        "December" => "Aralık",
        "Mon" => "Pzt",
        "Tue" => "Sal",
        "Wed" => "Çar",
        "Thu" => "Per",
        "Fri" => "Cum",
        "Sat" => "Cts",
        "Sun" => "Paz",
        "Jan" => "Oca",
        "Feb" => "Şub",
        "Mar" => "Mar",
        "Apr" => "Nis",
        "Jun" => "Haz",
        "Jul" => "Tem",
        "Aug" => "Ağu",
        "Sep" => "Eyl",
        "Oct" => "Eki",
        "Nov" => "Kas",
        "Dec" => "Ara"
    ];

    public function __construct(string $format, $datetime = "now")
    {
        $this->format = $format;
        $this->datetime = $datetime;
    }

    public function dateToTurkish() : string
    {
        $date = date($this->format, strtotime($this->datetime));
        foreach ($this->daysandmonths as $english => $turkish)
        {
            $date = str_replace($english, $turkish, $date);
        }
        if (strpos($date, "Mayıs") !== false && strpos($this->format, "F") === false)
        {
            $date = str_replace("Mayıs", "May", $date);
        }
        return $date;
    }
}