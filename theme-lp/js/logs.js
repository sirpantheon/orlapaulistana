document.addEventListener('DOMContentLoaded', function () {
    const logContainer = document.createElement('div');
    const logArea = document.createElement('div');
    const copyButton = document.createElement('button');
    let logBuffer = [];

    // Estilo do contêiner do log
    logContainer.style.position = 'fixed';
    logContainer.style.top = '0';
    logContainer.style.left = '0';
    logContainer.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';
    logContainer.style.color = 'white';
    logContainer.style.padding = '10px';
    logContainer.style.zIndex = '9999';
    logContainer.style.maxHeight = '150px';
    logContainer.style.overflowY = 'auto';
    logContainer.style.width = '300px';
    logContainer.style.fontSize = '12px';
    logContainer.style.borderRadius = '4px';
    logContainer.style.display = 'flex';
    logContainer.style.flexDirection = 'column';

    // Estilo da área de log
    logArea.style.flexGrow = '1';
    logArea.style.overflowY = 'auto';

    // Estilo do botão de cópia
    copyButton.textContent = 'Copy Logs';
    copyButton.style.marginTop = '5px';
    copyButton.style.padding = '5px';
    copyButton.style.fontSize = '12px';
    copyButton.style.cursor = 'pointer';

    copyButton.addEventListener('click', function () {
        const logs = logBuffer.join('\n');
        if (navigator.clipboard) {
            navigator.clipboard.writeText(logs).then(() => {
                alert('Logs copied to clipboard');
            }).catch(err => {
                alert('Failed to copy logs');
            });
        } else {
            const textarea = document.createElement('textarea');
            textarea.value = logs;
            document.body.appendChild(textarea);
            textarea.select();
            try {
                document.execCommand('copy');
                alert('Logs copied to clipboard');
            } catch (err) {
                alert('Failed to copy logs');
            }
            document.body.removeChild(textarea);
        }
    });

    logContainer.appendChild(logArea);
    logContainer.appendChild(copyButton);
    document.body.appendChild(logContainer);

    function log(message) {
        const timestamp = new Date().toLocaleTimeString();
        const logEntry = `${timestamp}: ${message}`;
        logBuffer.push(logEntry);
        if (logBuffer.join('\n').length > 3000) {
            logBuffer = logBuffer.slice(-200);  // Manter apenas os últimos 200 logs para limitar o tamanho
        }
        logArea.textContent = logBuffer.join('\n');
        logArea.scrollTop = logArea.scrollHeight;
        console.log(message);
    }

    function observeChanges(targetNode) {
        const observer = new MutationObserver((mutationsList) => {
            const logMessages = [];
            for (let mutation of mutationsList) {
                if (mutation.type === 'attributes') {
                    logMessages.push(`Attribute '${mutation.attributeName}' changed: ${mutation.target.className}`);
                }
                if (mutation.type === 'childList') {
                    mutation.addedNodes.forEach(node => {
                        if (node.nodeType === 1) {
                            logMessages.push(`Element added: ${node.tagName.toLowerCase()} - ${node.className}`);
                        }
                    });
                    mutation.removedNodes.forEach(node => {
                        if (node.nodeType === 1) {
                            logMessages.push(`Element removed: ${node.tagName.toLowerCase()} - ${node.className}`);
                        }
                    });
                }
                if (mutation.type === 'characterData') {
                    logMessages.push(`Character data changed: ${mutation.target.textContent}`);
                }
            }
            if (logMessages.length > 0) {
                log(logMessages.join('; '));
            }
        });

        observer.observe(targetNode, {
            attributes: true,
            childList: true,
            subtree: true,
            characterData: true,
            attributeOldValue: true,
            characterDataOldValue: true,
        });
    }

    const elementsToObserve = document.querySelectorAll('body, .theme-switch, .foto-panoramica-dia, .foto-panoramica-noite, .textura-panoramica_topo-dia, .textura-panoramica_topo-noite, .textura-panoramica_baixo-dia, .textura-panoramica_baixo-noite, #logo-orla');
    elementsToObserve.forEach((element) => {
        observeChanges(element);
    });

    // Observer for the entire body to catch any new elements added/removed dynamically
    observeChanges(document.body);

    log('Logger initialized and observing changes.');
});
