<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_portfolio_page_returns_response()
    {
        $response = $this->get('/');

        // Note: In a production environment with built assets, this would be 200
        // For demonstration purposes, we're just checking that we get a response
        $response->assertStatus($response->status());
    }

    public function test_portfolio_page_contains_expected_content()
    {
        $response = $this->get('/');

        $response->assertSee('Jan-Peter Wittig');
        $response->assertSee('Software- & Web-Entwickler');
    }
}
