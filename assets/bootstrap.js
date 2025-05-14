import { Application } from '@hotwired/stimulus';

const application = Application.start();

// Importe directement chaque contrôleur ici, par exemple :
import HelloController from './controllers/hello_controller.js';
application.register('hello', HelloController);