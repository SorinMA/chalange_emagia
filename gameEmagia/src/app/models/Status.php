<?php
namespace appemag\app\models;

use appemag\app\models\helpers\HelperValuesFormater;

/**
 * class: Status
 * scope:
 *  este o structura de date ce are rolul de a menegui statusul (ca entitate),
 *  utilizat mai tarziu de catre combatanti.
 * clasa-contine:
 *  - setteri si getteri
 *  - constructor cu parametri
 *  - o functie (get_status_formated()) ce returneaza, formatat pentru printare statusurile.
 */
class Status {
    protected $health;
    protected $strength;
    protected $defence;
    protected $speed;
    protected $luck;

    function __construct(int $health, int $strength,int $defence,int $speed,int $luck) {
        $this->set_health($health);
        $this->set_strength($strength);
        $this->set_defence($defence);
        $this->set_speed($speed);
        $this->set_luck($luck);
    }

    public function get_health() : int {
        return $this->health;
    }

    public function get_strength() : int {
        return $this->strength;
    }

    public function get_defence() : int {
        return $this->defence;
    }

    public function get_speed() : int {
        return $this->speed;
    }

    public function get_luck() : int {
        return $this->luck;
    }

    public function set_health(int $health) {
        $this->health = HelperValuesFormater::value_formater($health, false);
    }

    public function set_strength(int $strength) {
        $this->strength = HelperValuesFormater::value_formater($strength, false);
    }

    public function set_defence(int $defence) {
        $this->defence = HelperValuesFormater::value_formater($defence, false);
    }

    public function set_speed(int $speed) {
        $this->speed = HelperValuesFormater::value_formater($speed, false);
    }

    public function set_luck(int $luck) {
        $this->luck = HelperValuesFormater::value_formater($luck, true);
    }

    /** 
     * functie ia statusurile si pe baza lor genereaza un string
     * formatat spre a fi folosit mai tarziu pentru printare.
     */ 
    public function get_status_formated() {
        return "<h3>" . "Health: " . $this->get_health() . "<br/>" .
               "Strength: " . $this->get_strength() . "<br/>" .
               "Defence: " . $this->get_defence() . "<br/>" .
               "Speed: " . $this->get_speed() . "<br/>" .
               "Luck: " . $this->get_luck() . "<br/>" .
               "</h3>";
    }
}

?>