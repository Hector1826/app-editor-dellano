<?php

  
    function previewImg($nomImg, $id)
    {
        $view = '<div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12" id="' . $id . '">';
        $view .='<div class="image-container p-1 bg-secondary-2 p-relative">';
        $view .='<img src="../view/assets/uploads/'.$nomImg.'">';
        $view .='<figcaption class="p-absolute to-top">';
        $view .='<a class="edit-item nav-item nav-link text-white opacity-90 bg-secondary" title="Precio">$4.8</a>';
        $view .='<a class="edit-item nav-item nav-link text-white opacity-90 bg-secondary float-right" title="Cantidad">2</a>';
        $view .='</figcaption>';
        $view .='<figcaption class="p-absolute to-bottom bg-secondary opacity-90">';
        $view .='<a onclick="loadCanvasEditor('.$id.')" class="edit-item nav-item nav-link text-white opacity-90 bg-secondary" title="Editar" id="editar">';
        $view .='<i class="fa fa-edit"></i></a>';
        $view .='<a onclick="deleteImg('.$id.')" class="edit-item nav-item nav-link text-white opacity-90 bg-seconary float-right" title="Eliminar" id="delete">';
        $view .='<i class="fa fa-trash-alt"></i></a>';
        $view .='</figcaption>';
        $view .='</div>';
        $view .='</div>';
        return $view;
    }
