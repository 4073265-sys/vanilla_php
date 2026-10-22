<?php
class Ciclo
{
   public function __construct(
        public string $codCiclo,
        public string $nombre,
        public string $grado,
    ) {
    }
    public function titulacion(): string
    {
        return $this->grado === self::GRADO_SUPERIOR ? 'Técnico Superior' : 'Técnico';
    }
    public function getnombre(): string
    {
        return strtoupper($this->nombre);
    }
}

$daw = new Ciclo('DAW', 'Desarrollo de Aplicaciones Web', Ciclo::GRADO-SUPERIOR);
echo  "El ciclo " . $daw->getNombre() . " tiene la titulacion de " . $daw-> titulacion(). "\n";
