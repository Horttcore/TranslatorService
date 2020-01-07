<?php
namespace RalfHortt\TranslatorService;

use RalfHortt\ServiceContracts\ServiceContract;

class Translator
{
    protected string $textdomain;
    protected $translationPath;

    /**
     * Register in WordPress lifecycle
     **/
    public function register(string $textdomain, string $translationPath): void
    {
        $this->textdomain = $textdomain;
        $this->translationPath = $translationPath;

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
