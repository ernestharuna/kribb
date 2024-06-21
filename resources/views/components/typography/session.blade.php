<div>
    <x-typography.session-success />
    <x-typography.session-error />
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <script>
        document.getElementById('dismiss-button').addEventListener('click', function() {
            document.getElementById('flash-message').style.display = 'none';
        });
    </script>
</div>
