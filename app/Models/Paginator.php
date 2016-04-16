<?php

namespace App\Models;

class Paginator
{
    /**
     * Total of the page
     * @var int
     */
    protected $total;
    /**
     * The current page being "viewed".
     * @var int
     */
    protected $currentPage;

    /**
     * The base path to assign to all URLs.
     *
     * @var string
     */
    protected $path;

    public function __construct($total,$currentPage,$path)
    {
        $this->total = $total;
        $this->currentPage = $currentPage;
        $this->path = $path;
    }

    /**
     * This method to get the link of pagination
     * @return string
     */
    public function render()
    {
        $render = '<nav><ul class="pager">';
        if ($this->currentPage > 1){
            $render .= '<li><a href="'.$this->path.'/'.($this->currentPage-1).'" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span></a>
				        </li>';
        }

        $start = ($this->currentPage - 2 > 0) ? $this->currentPage - 2 : 1;
        $end = ($this->currentPage + 2 <= $this->total) ? $this->currentPage + 2 : $this->total;

        for ($i=$start;$i<=$end;$i++){
            $render .= '<li><a href="'.$this->path.'/'.$i.'">'.$i.'</a></li>';
        }

        if ($this->currentPage < $this->total){
            $render .= '<li><a href="'.$this->path.'/'.($this->currentPage+1).'" aria-label="Next">
						<span aria-hidden="true">&raquo;</span></a>
				        </li>';
        }

        $render .= '</ul></nav>';
        return $render;
    }
}
