<?php
namespace RalfHortt\TranslatorService;

use RalfHortt\ServiceContracts\ServiceContract;

class Translator implements ServiceContract
{
    protected string $textdomain;
    protected $absolutePath;

    /**
     * Construct
     **/
    public function __construct(string $textdomain, string $absolutePath)
    {
        $this->textdomain = $textdomain;
        $this->absolutePath = $absolutePath;
    }

    /**
     * Register in WordPress lifecycle
     **/
    public function register(): void
    {
        $this->loadTranslation();
    }

    /**
     * Load translation
     **/
    public function loadTranslation(): bool
    {
        return \load_plugin_textdomain($this->getTextdomain(), false, $this->getTranslationPath());
    }

    /**
     * Get textdomain
     **/
    public function getTextdomain(): string
    {
        return $this->textdomain;
    }

    /**
     * Get textdomain
     **/
    public function getTranslationPath(): string
    {
        return $this->translationPath;
    }
}
