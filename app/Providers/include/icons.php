<?php

// INI iconos para menus fas fa-sliders-h
View::share('icon_menus', [
    //Sistema
    'config'=>'fas fa-wrench',
    'sistema'=>'fas fa-cog',
    'brand'=>'fas fa-archive',

    'user'=>'fas fa-user',
    'users'=>'fas fa-users',
    'userplus'=>'fas fa-user-plus',
    'profile'=>'fas fa-id-card',
    'rol'=>'far fa-id-badge',

    'alert'=>'fas fa-bell',
    'task'=>'fas fa-tasks',
    'messege'=>'fas fa-comments',
    'mail'=>'fa fa-envelope',
    'sendmail'=>'fas fa-share', //<i class="fas fa-share"></i>
    'loginout'=>'fas fa-external-link-alt',
    'logdb'=>'fas fa-database',
    'setting'=>'fas fa-sliders-h',
    'options'=>'fas fa-grip-vertical',
    'clone'=>'far fa-clone',
    'selectopt'=>'fas fa-list',
    'tma'=>'fas fa-boxes',
    'inicio'=>'fas fa-home',
    'dashboard'=>'fas fa-tachometer-alt',
    'exclamation'=>'fas fa-exclamation',
    'danger'=>'fas fa-exclamation-triangle',

    // Edicion
    // 'editar'=>'fas fa-edit',
    'edit'=>
        '<svg xmlns="http://www.w3.org/2000/svg" class="my-1 h-4 w-4 inline"  viewBox="0 0 576 512">
            <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"/>
        </svg>'
    ,
    'editar'=>'fas fa-pen',
    'eliminar'=>'fas fa-trash',
    'open'=>'fas fa-plus',
    'nuevo'=>'fas fa-plus-circle',
    'guardado'=>'fas fa-save',
    'show'=>'fas fa-info-circle',
    'btn_ctr'=>'fas fa-bullseye',
    'crud'=>'fas fa-align-justify',
    'blacklist'=>'fas fa-align-justify',
    'tline'=>'fas fa-history',
    'info'=>'fas fa-info',
    'eye'=>'fas fa-eye',
    'close'=>'fas fa-times',
    'minimizar'=>'fas fa-angle-down',
    'maximizar'=>'fas fa-angle-up',
    'opcion'=>'fas fa-sliders-h',
    'buscar'=>'fas fa-search',
    'registrar'=>'fas fa-archive',
    'imprimir'=>'fas fa-print',
    'filtro'=>'fas fa-filter',
    'legenda'=>'fas fa-align-left',
    'check'=>'fas fa-check',
    'puntos'=>'fas fa-ellipsis-v',
    'generate'=>'fas fa-ellipsis-v',
    'ayuda'=>'fa fa-info-circle',
    'ayudas'=>'fa fa-question',
    'asistent'=>'fas fa-forward', //<i class="fas fa-forward"></i>


    // Gráficas
    'chartpie'=>'fas fa-chart-pie',
    'chartbar'=>'fas fa-chart-bar',
    'chartarea'=>'fas fa-chart-area',
    'chartline'=>'fas fa-chart-line',


    // SAEFL
    'estudiante'=>'fas fa-user-edit',
    'administracion'=>'fas fa-money-bill-alt',
    'control_estudio'=>'fas fa-folder',
    'institution'=>
        '<svg xmlns="http://www.w3.org/2000/svg" class="my-1 h-4 w-4 inline"  viewBox="0 0 576 512">
            <path d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z"/>
        </svg>',
    'oinstitucion'=>'fas fa-building text-info',
    'banco'=>'fas fa-university text-primary',
    'planpagos'=>'fas fa-th-large text-info',

    'cuentaxpagars'=>'fas fa-th-list text-success',
    'concepto_pagos'=>'fas fa-th text-danger',
    'isrl'=>'fas fa-percentage', //<i class="fas fa-percentage"></i>
    'plan_beneficos'=>'fas fa-user-check text-secondary',
    'descuentos'=>'fas fa-percentage text-danger',

    'peducativos'=>'fas fa-window-restore text-primary',
    'pestudios'=>'fas fa-book-open text-info',
    'grados'=>'fas fa-grip-vertical text-success',
    'seccions'=>'fas fa-grip-horizontal text-danger',
    'lapsos'=>'fas fa-stream text-info',
    'profesor'=>'fas fa-chalkboard-teacher text-success',
    'profesor_guia'=>'fas fa-id-card-alt text-primary',
    'representante'=>'fas fa-user-tie',

    'pago'=>'fas fa-money-check',
    'pagos_adelantados'=>'fas fa-money-check',
    'abonos'=>'fas fa-money-check',
    'registropagos'=>'fas fa-file-invoice',
    'registro_pagos'=>'fas fa-file-invoice',
    'registrar_pago'=>'fas fa-archive text-info',
    'cuentas_cobrar'=>'fas fa-coins',
    'operaciones_bancos'=>'fas fa-exchange-alt',
    'libro'=>'fas fa-book',
    'documento'=>'far fa-file-alt',
    'prepagos'=>'far fa-envelope text-success',
    'exchange_rates'=>'fas fa-chart-line text-dark',

    'notificaciones'=>'fas fa-exclamation-circle',
    'ingresos'=>'fas fa-coins',
    'inscripciones'=>'fas fa-file-alt',
    'autoridades'=>'fas fa-id-badge',

    'descuento'=>'fas fa-percent',
    'sync_datas'=>'fas fa-sync',
    'cronograma'=>'fas fa-calendar-check',
    'notas'=>'fas fa-exchange-alt',
    'list'=>'fas fa-list',
    'pdf'=>'fa fa-file-pdf',
    'print'=>'fa fa-print',
    'xls'=>'fas fa-file-excel',
    'csv'=>'fas fa-file-csv', //<i class="fas fa-file-csv"></i>
    'pensum'=>'far fa-list-alt text-secondary',
    'pevaluacion'=>'fas fa-th-list',
    'evaluacion'=>'fas fa-list-ol',
    'edescriptivas'=>'fas fa-sliders-h',
    'aconocimiento'=>'fas fa-book-open text-danger',
    'asignatura'=>'fas fa-chalkboard text-danger',
    'grupo_estables'=>'fa fa-users text-primary',
    'boletin'=>'fab fa-wpforms',
    'carga'=>'fas fa-arrow-alt-circle-down',
    'historico'=>'fas fa-history text-info',
    'registro_titulos'=>'fas fa-user-graduate text-success',
    'saldo'=>'fas fa-wallet',
    'materia_pendientes'=>'fas fa-grip-vertical',
    'acta_notas'=>'fas fa-list-ol',
    'retiro'=>'fas fa-external-link-square-alt text-danger',

    'enrollments'=>'far fa-file-alt',

    //areas
    'SISTEMA'=>'fas fa-cog',
    'ADMINISTRACION'=>'fas fa-money-bill-alt',
    'CONTROL ESTUDIO'=>'fas fa-folder',

    //collections politicals
    'coll_politicals'=>'fas fa-th-large text-dark',
    'coll_nivels'=>'fas fa-project-diagram text-primary',
    'coll_activities'=>'fas fa-grip-vertical text-dark',
    'coll_debtors'=>'fas fa-slider-h text-primary',
    'coll_messeges'=>'fas fa-exchange-alt text-danger',
    'coll_promises'=>'fa fa-list-alt text-primary',
    'group'=>'fa fa-users',
    'queuing'=>'fas fa-list-ul', //<i class="fas fa-list-ul"></i>


    'bot'=>'fas fa-robot',


    //Control Assistenn
    'asisst_controls'=>'fas fa-user-clock',
    // 'asisst_control'=>'fas fa-user-clock',
    'assit_schedules'=>'fas fa-calendar',
]);
