<?php

namespace JoseChan\Pager;

class Pager {

    protected $page;

    protected $size;

    protected $total_page;

    public function __construct($page = 1, $size = 20)
    {
        $this->page = abs(intval($page)) ?: 1;
        $this->size = abs(intval($size)) ?: 20;
    }

    public function getPager($total_count)
    {
        $this->total_page = ceil( $total_count / $this->size);
        return $total_count > $this->size ? [
            'total_count'	=>	$total_count,
            'page_size'		=>	$this->size,
            'total_page'	=>	$this->total_page,
            'first_page'	=>	1,
            'prev_page'		=>	((1 == $this->page) ? 1 : ($this->page - 1)),
            'next_page'		=>	(($this->page == $this->total_page ) ? $this->total_page : ($this->page + 1)),
            'last_page'		=>	$this->total_page,
            'current_page'	=>	$this->page
        ] : [
            'total_count' => $total_count
        ];
    }

    public function getFirstIndex()
    {
        return $this->size * ($this->page - 1);
    }

    public function setPage($page)
    {
        $this->page = $page;
    }
}
