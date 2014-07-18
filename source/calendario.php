<?php
  $cont = array(
    'jornada' => array(
                  'dia' => array(
                            'partido' => array(
                                          'equipo'  => array(
                                                        'Primer Equipo',
                                                        'Segundo Equipo'
                                          ),
                                          'hora'    => 'Hora a la que va a ser el partido',
                                          'estadio' => 'El estadio'
                            )
                  )
    ),
    array(
                  'dia' => array(
                            'partido' => array(
                                          'equipo'  => array(
                                                        'Primer Equipo',
                                                        'Segundo Equipo'
                                          ),
                                          'hora'    => 'Hora a la que va a ser el partido',
                                          'estadio' => 'El estadio'
                            )
                  )
    )
  );

  echo $cont['jornada']['dia'];

  var_dump($cont);

  $fp = fopen('test.json', 'a+');
  fwrite($fp, json_encode($cont));
  fclose($fp);
?>