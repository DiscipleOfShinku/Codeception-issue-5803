<?php

class LoginFormCest
{
    public function _before(\FunctionalTester $I)
    {
        $I->amLoggedInAs(1);
    }

    public function editAdminCredentials(\FunctionalTester $I)
    {
        $I->amOnRoute('admin/edit?id=1');

        $I->submitForm('#admin-form', [
            'User[username]' => 'test-edited',
            'User[password]' => 'test-edited',
        ]);

        $I->see('Logout (test-edited)');
    }
}
