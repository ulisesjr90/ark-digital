document.addEventListener('DOMContentLoaded', function() {
    const domainChecker = document.querySelector('.domain-checker');
    const checkButton = document.querySelector('.check-domain');
    const resultDiv = document.createElement('div');
    resultDiv.className = 'domain-result';
    
    let timeoutId;

    if (domainChecker && checkButton) {
        // Add result div after the domain checker wrapper
        document.querySelector('.domain-checker-wrapper').appendChild(resultDiv);

        // Function to validate domain format
        function isValidDomain(domain) {
            const pattern = /^[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9](?:\.[a-zA-Z]{2,})+$/;
            return pattern.test(domain);
        }

        // Function to show loading state
        function setLoading(isLoading) {
            checkButton.disabled = isLoading;
            checkButton.innerHTML = isLoading ? 
                '<span class="spinner"></span> Checking...' : 
                'Check Availability';
        }

        // Function to show result
        function showResult(message, isAvailable) {
            resultDiv.className = `domain-result ${isAvailable ? 'available' : 'unavailable'}`;
            resultDiv.innerHTML = message;
            resultDiv.style.display = 'block';
        }

        // Function to check domain
        async function checkDomain(domain) {
            try {
                const response = await fetch(ajaxurl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `action=check_domain&domain=${encodeURIComponent(domain)}&nonce=${domainCheckerVars.nonce}`
                });

                const data = await response.json();

                if (data.success) {
                    showResult(
                        data.available ? 
                        `<span class="success">✓</span> ${domain} is available!` :
                        `<span class="error">×</span> ${domain} is not available.`,
                        data.available
                    );
                } else {
                    showResult(`<span class="error">×</span> Error: ${data.message}`, false);
                }
            } catch (error) {
                showResult('<span class="error">×</span> Error checking domain. Please try again.', false);
            } finally {
                setLoading(false);
            }
        }

        // Event listener for input changes (debounced)
        domainChecker.addEventListener('input', function(e) {
            clearTimeout(timeoutId);
            resultDiv.style.display = 'none';
            
            if (e.target.value.length > 2) {
                timeoutId = setTimeout(() => {
                    if (isValidDomain(e.target.value)) {
                        checkButton.disabled = false;
                    } else {
                        checkButton.disabled = true;
                    }
                }, 300);
            }
        });

        // Event listener for button click
        checkButton.addEventListener('click', function(e) {
            e.preventDefault();
            const domain = domainChecker.value.trim().toLowerCase();
            
            if (!domain) {
                showResult('<span class="error">×</span> Please enter a domain name.', false);
                return;
            }

            if (!isValidDomain(domain)) {
                showResult('<span class="error">×</span> Please enter a valid domain name.', false);
                return;
            }

            setLoading(true);
            checkDomain(domain);
        });
    }
});