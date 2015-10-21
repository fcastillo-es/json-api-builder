<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 20/10/15
 * Time: 15:51
 */

namespace FCastillo\JsonApiBuilder\Builder;


interface ItemBuilderInterface extends IdentifierBuilderInterface
{
    /**
     * @return object
     */
    public function getItemObject();
}
