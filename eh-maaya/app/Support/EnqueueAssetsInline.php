<?php

class EnqueueAssetsInline {
    public static function js($handle, $filePath, $deps = [], $inFooter = false)
    {
        static $enqueuedJs = [];

        if(in_array($filePath, $enqueuedJs, true)) {
            return;
        }

        wp_register_script( 
			$handle, 
			'', 
			$deps, 
			null, 
			$inFooter 
        );

        wp_enqueue_script($handle);

        wp_add_inline_script(
            $handle, 
            file_get_contents($filePath)
        );

        $enqueuedJs[] = $filePath;
    }

    public static function css($handle, $filePath, $deps = [], $inFooter = false)
    {
        static $enqueuedCss = [];

        if(in_array($filePath, $enqueuedCss, true)) {
            return;
        }

        wp_register_style( 
			$handle, 
			'', 
			$deps, 
			null, 
			$inFooter 
        );

        wp_enqueue_style($handle);

        wp_add_inline_style(
            $handle, 
            file_get_contents($filePath)
        );

        $enqueuedCss[] = $filePath;
    }
}
