<?php

namespace Faker\Provider\es_CL;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = [
        '{{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}} {{lastName}}',
    ];

    protected static $femaleNameFormats = [
        '{{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastName}} {{lastName}}',
    ];
    protected static $firstNameMale = ['Juan', 'Pedro', 'Pablo', 'Miguel', 'José', 'Santiago', 'Matías', 'Diego', 'Jorge', 'Felipe', 'Alejandro', 'Daniel', 'Lucas', 'Ángel', 'Sebastián', 'Marcos', 'Francisco', 'Rafael', 'Manuel', 'Vicente', 'Rodrigo', 'Cristian', 'Ignacio', 'Maximiliano', 'Leo', 'Fernando', 'Gustavo', 'Esteban', 'Andrés', 'Hernán', 'Mario', 'Mauricio', 'Christian', 'Eduardo', 'Tomás', 'Emiliano', 'Luis', 'Damian', 'Adrián', 'Camilo', 'Germán', 'Iván', 'Hugo', 'Patricio', 'Javier', 'Simón', 'Nicolas', 'Alan', 'Joaquín', 'Federico', 'Benjamin', 'Renato', 'Dylan', 'Alex', 'Bruno', 'Ernesto', 'Oscar', 'Julián', 'Dario', 'Ricardo', 'Juan Pablo', 'Martin', 'Sergio', 'Juan Carlos', 'Edgar', 'Juan Manuel', 'Gonzalo', 'Juan Jose', 'Saul', 'Erick', 'Enrique', 'Jaime', 'Juan David', 'Carlos', 'Elías', 'David', 'Diego Alejandro'];

    protected static $firstNameFemale = ['María', 'Paula', 'Juana', 'Sara', 'Camila', 'Valentina', 'Catalina', 'Isabel', 'Daniela', 'Mariana', 'Jazmín', 'Antonia', 'Valeria', 'Marcela', 'Jimena', 'Josefa', 'Martina', 'Francisca', 'Luciana', 'Andrea', 'Alexandra', 'Carolina', 'Daniela', 'Amanda', 'Pilar', 'Ana', 'Gabriela', 'Cecilia', 'Victoria', 'Pamela', 'Angélica', 'Rosa', 'Claudia', 'Emilia', 'Diana', 'Rebeca', 'Alicia', 'Miranda', 'Abril', 'Marisol', 'Alessandra', 'Julieta', 'Cristina', 'Carla', 'Fernanda', 'Natalia', 'Lorena', 'Barbara', 'Fátima', 'Ana María', 'Ana Sofía', 'Liliana', 'Vanesa', 'Nataly', 'Maite', 'Rocío', 'Ana Paula', 'Blanca', 'Elena', 'Sofía', 'Estefanía', 'Bárbara', 'Raquel', 'Luz', 'Noelia', 'Mía', 'Alma', 'Margarita'];

    protected static $lastName = ['González', 'Rodríguez', 'Gómez', 'Fernández', 'López', 'Martínez', 'Pérez', 'Sánchez', 'Díaz', 'Vásquez', 'Rojas', 'Hernández', 'Muñoz', 'Ramírez', 'Flores', 'Castillo', 'Morales', 'Suárez', 'Gutiérrez', 'Carrasco', 'Vargas', 'Romero', 'Alonso', 'Navarro', 'Silva', 'Araya', 'Espinoza', 'Duran', 'Martín', 'Contreras', 'Cortés', 'Castro', 'Erazo', 'Farias', 'García', 'Reyes', 'Torres', 'Ortiz', 'Álvarez', 'Molina', 'Barra', 'Sepúlveda', 'Vidal', 'Vega', 'Figueroa', 'Pino', 'Lagos', 'Fuentes', 'Tapia', 'Parra', 'Hidalgo', 'Montero', 'Rivera', 'Guzmán', 'Garrido', 'Luna', 'Ríos', 'Pinto', 'Escobar', 'Olivares', 'Soto', 'Leal', 'Cabrera', 'Pizarro', 'Palma', 'Guerrero', 'Hoyos'];

    protected static $titleMale = ['Sr.', 'Don'];

    protected static $titleFemale = ['Srta.', 'Sra.'];

    /**
     * Generate a random rut
     *
     * @param int $length
     * @return string
     */
    public function rut(int $length = 8): string
    {
        $rut = '';

        for($i = 0; $i < $length; $i++) {
            $rut .= mt_rand(0, 9);
        }

        $dv = self::getVd((int)$rut);

        return "{$rut}-{$dv}";
    }

    /**
     * Returns the Verification Digit from a RUT number.
     * https://github.com/Laragear/Rut/blob/a4f6812a889c67115a6c7f2d7e0782ec4807061f/src/Rut.php#L446
     *
     * @param  int  $num
     * @return string
     */
    public static function getVd(int $num): string
    {
        $i = 2;
        $sum = 0;

        foreach (array_reverse(str_split((string) $num)) as $v) {
            if ($i === 8) {
                $i = 2;
            }
            $sum += (int) $v * $i;
            $i++;
        }

        $digit = 11 - ($sum % 11);

        return (string) match ($digit) {
            11 => 0,
            10 => 'K',
            default => $digit,
        };
    }
}
