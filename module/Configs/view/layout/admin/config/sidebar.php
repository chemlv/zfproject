<?php
/**
 * This source file is part of GotCms.
 *
 * GotCms is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * GotCms is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License along
 * with GotCms. If not, see <http://www.gnu.org/licenses/lgpl-3.0.html>.
 *
 * PHP Version >=5.3
 *
 * @category Gc
 * @package  Config
 * @author   Pierre Rambaud (GoT) <pierre.rambaud86@gmail.com>
 * @license  GNU/LGPL http://www.gnu.org/licenses/lgpl-3.0.html
 * @link     http://www.got-cms.com
 */
 return array (
  'Seo' => 
  array (
    'id' => '25',
    'name' => 'Seo',
    'icon' => 'icon-archive',
    'label' => 'Seo',
    'route' => 'admin-seo/default',
    'params' => 
    array (
      0 => 'index',
      1 => 'index',
    ),
    'resource' => 'content/document',
    'pages' => 
    array (
    ),
  ),
  'Content' => 
  array (
    'id' => '1',
    'name' => 'Content',
    'icon' => 'fa-wrench',
    'label' => 'Content',
    'route' => 'admin/login',
    'params' => 
    array (
    ),
    'resource' => 'modules/list',
    'pages' => 
    array (
    ),
  ),
  'Development' => 
  array (
    'id' => '2',
    'name' => 'Development',
    'icon' => 'fa-files-o',
    'label' => 'Development',
    'route' => 'admin/login',
    'params' => 
    array (
    ),
    'resource' => 'content',
    'pages' => 
    array (
      0 => 
      array (
        'id' => '24',
        'name' => 'Filemanager',
        'icon' => 'icon-archive',
        'label' => 'Filemanager',
        'route' => 'filemanager/default',
        'params' => 
        array (
          0 => 'index',
        ),
        'resource' => 'development/view/list',
        'pages' => 
        array (
        ),
      ),
      1 => 
      array (
        'id' => '22',
        'name' => 'Manager Categories',
        'icon' => 'fa-bars fa-lg',
        'label' => 'Manager Categories',
        'route' => 'development/categorie',
        'params' => 
        array (
          0 => 'index',
        ),
        'resource' => 'development/view/list',
        'pages' => 
        array (
        ),
      ),
    ),
  ),
  'Module' => 
  array (
    'id' => '20',
    'name' => 'Module',
    'icon' => 'fa-bars fa-lg',
    'label' => 'Module',
    'route' => 'admin/default',
    'params' => 
    array (
      0 => 'index',
      1 => 'index',
    ),
    'resource' => 'modules/list',
    'pages' => 
    array (
      0 => 
      array (
        'id' => '21',
        'name' => 'Manager Navigation',
        'icon' => 'fa-bars fa-lg',
        'label' => 'Manager Navigation',
        'route' => 'admin/navigation',
        'params' => 
        array (
          0 => 'index',
        ),
        'resource' => 'development/view/list',
        'pages' => 
        array (
        ),
      ),
    ),
  ),
  'Acl' => 
  array (
    'id' => '3',
    'name' => 'Acl',
    'icon' => 'fa-dashboard',
    'label' => 'Acl',
    'route' => 'admin/login',
    'params' => 
    array (
    ),
    'resource' => 'development',
    'pages' => 
    array (
      0 => 
      array (
        'id' => '19',
        'name' => 'Manager Permission',
        'icon' => 'fa-bars fa-lg',
        'label' => 'Manager Permission',
        'route' => 'admin-acl/manager-role',
        'params' => 
        array (
          0 => 'index',
        ),
        'resource' => 'settings/role/list',
        'pages' => 
        array (
        ),
      ),
      1 => 
      array (
        'id' => '14',
        'name' => 'Manager Role',
        'icon' => 'fa-bars fa-lg',
        'label' => 'Manager Role',
        'route' => 'admin-acl/manager-role',
        'params' => 
        array (
          0 => 'index',
          1 => '',
          2 => '',
          3 => '',
          4 => NULL,
        ),
        'resource' => 'settings/role/list',
        'pages' => 
        array (
        ),
      ),
      2 => 
      array (
        'id' => '15',
        'name' => 'Manager User',
        'icon' => 'fa-bars fa-lg',
        'label' => 'Manager User',
        'route' => 'admin/user-manager',
        'params' => 
        array (
          0 => false,
        ),
        'resource' => 'settings/user/list',
        'pages' => 
        array (
        ),
      ),
    ),
  ),
  'Settings' => 
  array (
    'id' => '4',
    'name' => 'Settings',
    'icon' => 'fa-th',
    'label' => 'Settings',
    'route' => 'admin/login',
    'params' => 
    array (
      0 => '',
    ),
    'resource' => 'development/document-type/edit',
    'pages' => 
    array (
      0 => 
      array (
        'id' => '23',
        'name' => 'Site Setting',
        'icon' => 'icon-archive',
        'label' => 'Site Setting',
        'route' => 'admin/setting',
        'params' => 
        array (
          0 => 'index',
        ),
        'resource' => 'development/view/list',
        'pages' => 
        array (
        ),
      ),
    ),
  ),
);
