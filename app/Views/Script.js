// Basic Login Form Script
class BasicLoginForm {
    constructor() {
        // Asegúrate de que el ID del formulario en tu HTML es 'loginForm' o ajústalo
        this.form = document.getElementById('loginForm'); 
        this.emailInput = document.getElementById('email');
        this.passwordInput = document.getElementById('password');
        this.passwordToggle = document.getElementById('passwordToggle');
        this.successMessage = document.getElementById('successMessage');
        
        this.init();
    }
    
    init() {
        // Initialize shared utilities
        FormUtils.addSharedAnimations();
        FormUtils.setupFloatingLabels(this.form);
        FormUtils.setupPasswordToggle(this.passwordInput, this.passwordToggle);
        
        // Add event listeners
        this.form.addEventListener('submit', this.handleSubmit.bind(this));
        this.emailInput.addEventListener('input', () => this.validateField('email'));
        this.passwordInput.addEventListener('input', () => this.validateField('password'));
        
        // Add entrance animation
        FormUtils.addEntranceAnimation(this.form.closest('.login-card'), 100);
    }
    
    validateField(fieldName) {
        const input = document.getElementById(fieldName);
        const value = input.value.trim();
        let validation;
        
        // Clear previous errors
        FormUtils.clearError(fieldName);
        
        // Validate based on field type
        if (fieldName === 'email') {
            validation = FormUtils.validateEmail(value);
        } else if (fieldName === 'password') {
            validation = FormUtils.validatePassword(value);
        }
        
        if (!validation.isValid && value !== '') {
            FormUtils.showError(fieldName, validation.message);
            return false;
        } else if (validation.isValid) {
            FormUtils.showSuccess(fieldName);
            return true;
        }
        
        return true;
    }
    
    async handleSubmit(e) {
        e.preventDefault();
        
        const email = this.emailInput.value.trim();
        const password = this.passwordInput.value.trim();
        
        // Validate all fields
        const emailValid = this.validateField('email');
        const passwordValid = this.validateField('password');
        
        if (!emailValid || !passwordValid) {
            FormUtils.showNotification('Please fix the errors below', 'error', this.form);
            return;
        }
        
        // Show loading state
        // Nota: Cambié el selector a '.gradient-button' si el HTML original no tiene 'login-btn'
        const submitBtn = this.form.querySelector('.gradient-button'); 
        submitBtn.classList.add('loading');
        
        try {
            // Simulate login process
            await FormUtils.simulateLogin(email, password);
            
            // Show success state
            this.showSuccess();
            
        } catch (error) {
            // Show error notification
            FormUtils.showNotification(error.message, 'error', this.form);
        } finally {
            // Remove loading state
            submitBtn.classList.remove('loading');
        }
    }
    
    /**
     * Muestra el mensaje de éxito y redirige a la página de bienvenida.
     */
    showSuccess() {
        // 1. Ocultar el formulario
        this.form.style.display = 'none';
        
        // 2. Mostrar el mensaje de éxito (la plantilla HTML)
        this.successMessage.classList.add('visible'); // Usando 'visible' o 'show' según tu CSS
        
        const REDIRECTION_DELAY = 2000; // 2 segundos de retraso para el mensaje
        
        // 3. Redirigir la ventana después del retraso
        setTimeout(() => {
            // 🚨🚨 DEFINE AQUÍ LA RUTA DE TU PÁGINA DE BIENVENIDA 🚨🚨
            const WELCOME_PAGE_URL = 'welcome_nenssage.php'; 
            
            window.location.href = WELCOME_PAGE_URL;
        }, REDIRECTION_DELAY);
    }
}

// Initialize the form when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    // Si tu formulario no tiene el ID 'loginForm', usa:
    // const formElement = document.querySelector('.login-form'); 
    // if (formElement && !formElement.id) { formElement.id = 'loginForm'; }
    
    // Y luego inicializa:
    new BasicLoginForm();
});