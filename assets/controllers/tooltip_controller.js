import { Controller } from '@hotwired/stimulus';
import { Tooltip } from 'bootstrap';

/* stimulusFetch: 'lazy' */
export default class extends Controller {
    connect() {
        new Tooltip(this.element)
    }
}
