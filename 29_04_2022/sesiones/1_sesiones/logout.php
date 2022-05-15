<?php

session_start();

// Cerrar una sesión. Me aseguro de que esté cerrada ya que es posible de que cuando cierre el navegador siga abierta

session_destroy();
echo "Sesión cerrada";