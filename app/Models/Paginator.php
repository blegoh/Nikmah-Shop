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
        $render .= $this->getPrev();

        $start = ($this->currentPage - 2 > 0) ? $this->currentPage - 2 : 1;
        $end = ($this->currentPage + 2 <= $this->total) ? $this->currentPage + 2 : $this->total;

        for ($i=$start;$i<=$end;$i++){
            $render .= '<li><a href="'.$this->path.'/'.$i.'">'.$i.'</a></li>';
        }
        $render .= $this->getNext();
        $render .= '</ul></nav>';
        return $render;
    }

    private function getPrev()
    {
        if ($this->currentPage > 1){
            return '<li><a href="'.$this->path.'/'.($this->currentPage-1).'" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span></a>
				        </li>';
        }else{
            return '';
        }
    }

    private function getNext()
    {
        if ($this->currentPage < $this->total){
            return '<li><a href="'.$this->path.'/'.($this->currentPage+1).'" aria-label="Next">
						<span aria-hidden="true">&raquo;</span></a>
				        </li>';
        }else{
            return '';
        }
    }
}
