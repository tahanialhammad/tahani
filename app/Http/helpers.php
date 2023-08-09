<?php

/**
 * @param      $path string Route name
 * @param null $id string For routes that contain a dynamic ID (e.g. in the installation wizard)
 *
 * @return string returns 'active' if route matches, else return emtpy string
 */
function set_active($path, $id = null)
{
    if (!is_null($id)) {
        return Request::is(ltrim(route($path, $id, false), '/')) ? "active" : "";
    }

    // If the current route contains '..', only match the part before that
    // e.g. if the route is 'admin.integrations.debug..entity', match on 'admin.integrations.debug'
    if (strpos(Route::currentRouteName(), "..")) {
        $routeToMatch = explode("..", Route::currentRouteName())[0];

        return $path == $routeToMatch ? "active" : "";
    }

    return Route::is($path) ? "active" : "";
}