<?php

namespace GO1\Gridster\GridMaster\Helper;

use GO1\Gridster\GridMaster\GridMasterInterface;

interface RenderInterface
{

    /**
     * Setter for grid_master property.
     *
     * @param GridMasterInterface $grid_master
     */
    public function setGridMaster(GridMasterInterface $grid_master);

    /**
     * Main method to process and output grid-master.
     *
     * @return string
     */
    public function render();
}
