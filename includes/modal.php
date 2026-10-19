<dialog id="download-modal" class="modal">

    <div class="modal-header">
        <h3>Hazard Cars</h3>
        <button type="button" class="modal-close" id="close-download" aria-label="Fechar">✕</button>
    </div>

    <p class="modal-text">Choose your platform:</p>

    <div class="modal-links">

        <a href="downloads/linux/hazard-cars.x86_64" download class="modal-link" title="Download Hazard Cars for Linux">
            <span class="platform">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <rect x="3" y="4" width="18" height="16" rx="2"/>
                    <path d="M7 9l3 3-3 3"/>
                    <path d="M12 16h5"/>
                </svg>
                Download for Linux
            </span>
            <span>↓</span>
        </a>

        <a href="downloads/windows/hazard-cars.zip" download class="modal-link" title="Download Hazard Cars for Windows">
            <span class="platform">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M3 3h8.5v8.5H3zM12.5 3H21v8.5h-8.5zM3 12.5h8.5V21H3zM12.5 12.5H21V21h-8.5z"/>
                </svg>
                Download for Windows
            </span>
            <span>↓</span>
        </a>

        <a href="downloads/android/hazardcars.apk" download class="modal-link" title="Download Hazard Cars for Android">
            <span class="platform">
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                    <path d="M6 8a6 6 0 0 1 12 0z"/>
                    <path d="M6 9h12v8a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1z"/>
                    <rect x="3" y="9" width="2" height="6" rx="1"/>
                    <rect x="19" y="9" width="2" height="6" rx="1"/>
                    <rect x="8.5" y="17" width="2" height="4" rx="1"/>
                    <rect x="13.5" y="17" width="2" height="4" rx="1"/>
                    <path d="M8 2.5l1.2 1.7M16 2.5l-1.2 1.7" stroke="currentColor" stroke-width="1.2" stroke-linecap="round"/>
                    <circle cx="9.5" cy="5.2" r=".8" fill="#111"/>
                    <circle cx="14.5" cy="5.2" r=".8" fill="#111"/>
                </svg>
                Download for Android
            </span>
            <span>↓</span>
        </a>

    </div>

</dialog>

<script>
    const modal = document.getElementById('download-modal');

    document.getElementById('open-download')
        .addEventListener('click', () => modal.showModal());

    document.getElementById('close-download')
        .addEventListener('click', () => modal.close());

    // Fecha ao clicar fora da caixa
    modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.close();
    });
</script>

<script>
    const modal = document.getElementById('download-modal');

    document.getElementById('open-download')
        .addEventListener('click', () => modal.showModal());

    document.getElementById('close-download')
        .addEventListener('click', () => modal.close());

    // Fecha ao clicar fora da caixa
    modal.addEventListener('click', (e) => {
        if (e.target === modal) modal.close();
    });
</script>