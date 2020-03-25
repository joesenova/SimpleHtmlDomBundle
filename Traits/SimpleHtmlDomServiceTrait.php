<?php

namespace MacroProg\SimpleHtmlDomBundle\Traits;

trait SimpleHtmlDomServiceTrait
{
    /**
     * @var \simple_html_dom
     */
    protected $simpleHtmlDomService;

    /**
     * @return \simple_html_dom
     */
    public function getSimpleHtmlDomService()
    {
        return $this->simpleHtmlDomService;
    }

    /**
     * @param \simple_html_dom $simpleHtmlDomService
     */
    public function setSimpleHtmlDomService(\simple_html_dom $simpleHtmlDomService)
    {
        $this->simpleHtmlDomService = $simpleHtmlDomService;
    }
}