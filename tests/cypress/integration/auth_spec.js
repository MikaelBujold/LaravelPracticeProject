describe('Authentication', ()=> {
    it('provides feedback for invalid login credentials', ()=> {
        cy.refreshDatabase();

        cy.visit('/login');

        cy.get('#email').type('foo@example.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Log In').click();

        cy.contains('Your provided credentials could not be verified.');
    });

    it('provides feedback for valid login credentials', ()=> {
        cy.refreshDatabase();

        cy.create("App\\Models\\User", {email: 'joe@example.com', password: 'password'});

        cy.visit('/login');

        cy.get('#email').type('joe@example.com');
        cy.get('#password').type('password');
        cy.contains('button', 'Log In').click();

        cy.assertRedirect('/');
    });
});
