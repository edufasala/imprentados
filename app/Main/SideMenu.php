<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'route_name' => 'dashboard',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Usuarios' => [
                'icon' => 'users',
                'title' => 'Usuarios',
                'route_name' => 'usuarios.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Estadistica' => [
                'icon' => 'bar-chart',
                'title' => 'Estadisticas',
                'route_name' => 'estadisticas.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Central File' => [
                'icon' => 'file-text',
                'title' => 'Central File',
                'route_name' => 'centralfile.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Precios' => [
                'icon' => 'archive',
                'title' => 'Precios',
                'route_name' => 'precios.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Tesoreria' => [
                'icon' => 'dollar-sign',
                'title' => 'Tesoreria',
                'route_name' => 'tesoreria.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Facturas' => [
                'icon' => 'layers',
                'title' => 'Facturas',
                'route_name' => 'facturas.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Diseño' => [
                'icon' => 'pen-tool',
                'title' => 'Diseño',
                'route_name' => 'disenos.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Entregas' => [
                'icon' => 'truck',
                'title' => 'Entregas',
                'route_name' => 'entregas.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Clientes' => [
                'icon' => 'user-plus',
                'title' => 'Clientes',
                'route_name' => 'clientes.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Impresion' => [
                'icon' => 'printer',
                'title' => 'Impresión',
                'route_name' => 'impresion.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ],
            'Configuraciones' => [
                'icon' => 'settings',
                'title' => 'Configuraciones',
                'route_name' => 'configuraciones.index',
                'params' => [
                    'layout' => 'simple-menu'
                ],
            ]
        ];
    }
}
