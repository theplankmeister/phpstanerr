describe('Prove the error', function() {
    it('Visits the endpoint', function() {
        cy.visit('https://localhost:8000/default');
        cy.contains('This is a message from the service that DOES exist in the container.');
    })
});