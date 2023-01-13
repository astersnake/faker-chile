<?php

namespace Faker\Provider\es_CL;

class Address extends \Faker\Provider\Address
{
    protected static array $cityPrefix = array('Puerto', 'San', 'Villa', 'Colonia', 'Las', 'La', 'Los');
    protected static $citySuffix = array('Chico', 'Grande', 'Viejo', 'Nuevo', 'Corto', 'Largo', 'Bajo', 'Alto', 'Sur', 'Norte');
    protected static $buildingNumber = array('####', '###', '##');
    protected static array $streetPrefix = array('Avenida', 'Av.', 'Calle', 'Pje.', 'Paseo', 'Plaza', 'Puente', 'Ronda', 'Vía');
    protected static $postcode = array('#######');
    protected static array $municipality = array('Santiago', 'Valdivia', 'Valparaíso', 'Concepción', 'Temuco', 'La Serena', 'Antofagasta', 'Rancagua', 'Talca', 'Arica', 'Iquique', 'Chillán', 'Osorno', 'Quillota', 'Calama', 'Puerto Montt', 'Viña del Mar', 'Copiapó', 'Curicó', 'San Fernando', 'Punta Arenas', 'Talcahuano', 'Quilpué', 'Los Ángeles', 'San Bernardo', 'Coquimbo', 'Villa Alemana', 'San Carlos', 'Chiguayante', 'Linares', 'Ovalle', 'Melipilla');
    protected static array $region = array('Arica y Parinacota', 'Tarapacá', 'Antofagasta', 'Atacama', 'Coquimbo', 'Valparaíso', 'Región Metropolitana de Santiago', 'Libertador General Bernardo O\'Higgins', 'Maule', 'Ñuble', 'Biobío', 'Araucanía', 'Los Ríos', 'Los Lagos', 'Aysén del General Carlos Ibáñez del Campo', 'Magallanes y de la Antártica Chilena');

    protected static $country = array(
        'Afganistán', 'Albania', 'Alemania', 'Andorra', 'Angola', 'Antigua y Barbuda', 'Arabia Saudí', 'Argelia', 'Argentina', 'Armenia', 'Australia', 'Austria', 'Azerbaiyán',
        'Bahamas', 'Bangladés', 'Barbados', 'Baréin', 'Belice', 'Benín', 'Bielorrusia', 'Birmania', 'Bolivia', 'Bosnia-Herzegovina', 'Botsuana', 'Brasil', 'Brunéi Darusalam', 'Bulgaria', 'Burkina Faso', 'Burundi', 'Bután', 'Bélgica',
        'Cabo Verde', 'Camboya', 'Camerún', 'Canadá', 'Catar', 'Chad', 'Chile', 'China', 'Chipre', 'Ciudad del Vaticano', 'Colombia', 'Comoras', 'Congo', 'Corea del Norte', 'Corea del Sur', 'Costa Rica', 'Costa de Marfil', 'Croacia', 'Cuba',
        'Dinamarca', 'Dominica',
        'Ecuador', 'Egipto', 'El Salvador', 'Emiratos Árabes Unidos', 'Eritrea', 'Eslovaquia', 'Eslovenia', 'España', 'Estados Unidos de América', 'Estonia', 'Etiopía',
        'Filipinas', 'Finlandia', 'Fiyi', 'Francia',
        'Gabón', 'Gambia', 'Georgia', 'Ghana', 'Granada', 'Grecia', 'Guatemala', 'Guinea', 'Guinea Ecuatorial', 'Guinea-Bisáu', 'Guyana',
        'Haití', 'Honduras', 'Hungría',
        'India', 'Indonesia', 'Irak', 'Irlanda', 'Irán', 'Islandia', 'Islas Marshall', 'Islas Salomón', 'Israel', 'Italia',
        'Jamaica', 'Japón', 'Jordania',
        'Kazajistán', 'Kenia', 'Kirguistán', 'Kiribati', 'Kuwait',
        'Laos', 'Lesoto', 'Letonia', 'Liberia', 'Libia', 'Liechtenstein', 'Lituania', 'Luxemburgo', 'Líbano',
        'Macedonia', 'Madagascar', 'Malasia', 'Malaui', 'Maldivas', 'Mali', 'Malta', 'Marruecos', 'Mauricio', 'Mauritania', 'Micronesia', 'Moldavia', 'Mongolia', 'Montenegro', 'Mozambique', 'México', 'Mónaco',
        'Namibia', 'Nauru', 'Nepal', 'Nicaragua', 'Nigeria', 'Noruega', 'Nueva Zelanda', 'Níger',
        'Omán',
        'Pakistán', 'Palaos', 'Panamá', 'Papúa Nueva Guinea', 'Paraguay', 'Países Bajos', 'Perú', 'Polonia', 'Portugal',
        'Reino Unido', 'Reino Unido de Gran Bretaña e Irlanda del Norte', 'República Centroafricana', 'República Checa', 'República Democrática del Congo', 'República Dominicana', 'Ruanda', 'Rumanía', 'Rusia',
        'Samoa', 'San Cristóbal y Nieves', 'San Marino', 'San Vicente y las Granadinas', 'Santa Lucía', 'Santo Tomé y Príncipe', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leona', 'Singapur', 'Siria', 'Somalia', 'Sri Lanka', 'Suazilandia', 'Sudáfrica', 'Sudán', 'Suecia', 'Suiza', 'Surinam',
        'Tailandia', 'Tanzania', 'Tayikistán', 'Timor Oriental', 'Togo', 'Tonga', 'Trinidad y Tobago', 'Turkmenistán', 'Turquía', 'Tuvalu', 'Túnez',
        'Ucrania', 'Uganda', 'Uruguay', 'Uzbekistán',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Yemen', 'Yibuti',
        'Zambia', 'Zimbabue'
    );
    protected static $cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static $streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}'
    );
    protected static $streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}, {{secondaryAddress}}',
        '{{streetName}} {{buildingNumber}}',
    );
    protected static $addressFormats = array(
        "{{streetAddress}}, {{municipality}}, {{region}}"
    );
    protected static array $secondaryAddressFormats = array('Dpto. ###', 'Hab. ###', 'Piso #', 'Piso ##');

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::$streetPrefix);
    }

    /**
     * @example 'Villa'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::$cityPrefix);
    }

    /**
     * @example 'Dpto. 506'
     */
    public static function secondaryAddress(): string
    {
        return static::numerify(static::randomElement(static::$secondaryAddressFormats));
    }

    /**
     * @example 'Valparaíso'
     */
    public static function region()
    {
        return static::randomElement(static::$region);
    }

    /**
     * @example 'Comunidad de Limache'
     */
    public static function municipality()
    {
        return static::randomElement(static::$municipality);
    }
}
