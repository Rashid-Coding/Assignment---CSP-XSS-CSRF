# Assignment---CSP-XSS-CSRF
Class Assignment - CSP, XSS &amp; CSRF

1. CSP.
CSP file named csp.php is been created. The library used is "cdnjs.cloudflare.com". Login and Register page are been selected to have this as header.

2. XSS Defense
On server.php, I put XSS Defense to sanitize the input and prevent script injection.

3. CSRF Token
On home.php, I stored the CSRF token in this session. Then, I put CSRF token in the form specifically at submit button.
At submit.php, I put the code to validate CSRF token when the form is submitted. This validation must put here because it is in server-side.
