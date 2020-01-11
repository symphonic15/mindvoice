/*
 * English layout for smart-tv-keyboard
 * Denys Petrovnin <dipcore@gmail.com>
 * Date: 17-May-2015 11:16:22 PM
 */
smartTvKeyboardLayouts = typeof smartTvKeyboardLayouts === 'undefined'? {} : smartTvKeyboardLayouts;
smartTvKeyboardLayouts.es = {
    unshift: [
    	[
            {text: '1', value: '1', length: 1, color: 'number'},
            {text: '2', value: '2', length: 1, color: 'number'},
            {text: '3', value: '3', length: 1, color: 'number'},
            {text: '4', value: '4', length: 1, color: 'number'},
            {text: '5', value: '5', length: 1, color: 'number'},
            {text: '6', value: '6', length: 1, color: 'number'},
            {text: '7', value: '7', length: 1, color: 'number'},
            {text: '8', value: '8', length: 1, color: 'number'},
            {text: '9', value: '9', length: 1, color: 'number'},
            {text: '0', value: '0', length: 1, color: 'number'},
            {text: '¿', value: '¿', length: 1, color: 'letter'},
            {text: '?', value: '?', length: 1, color: 'letter'},
            {text: 'LIMPIAR', value: '&&clear', length: 3, color: 'danger'}
        ],
        [
            {text: 'Q', value: 'Q', length: 1, color: 'letter'},
            {text: 'W', value: 'W', length: 1, color: 'letter'},
            {text: 'E', value: 'E', length: 1, color: 'letter'},
            {text: 'R', value: 'R', length: 1, color: 'letter'},
            {text: 'T', value: 'T', length: 1, color: 'letter'},
            {text: 'Y', value: 'Y', length: 1, color: 'letter'},
            {text: 'U', value: 'U', length: 1, color: 'letter'},
            {text: 'I', value: 'I', length: 1, color: 'letter'},
            {text: 'O', value: 'O', length: 1, color: 'letter'},
            {text: 'P', value: 'P', length: 1, color: 'letter'},
            {text: '¡', value: '¡', length: 1, color: 'letter'},
            {text: '!', value: '!', length: 1, color: 'letter'},
            {text: 'BORRAR', value: '&&back', length: 3, color: 'warning'}
        ],
        [
            {text: 'A', value: 'A', length: 1, color: 'letter'},
            {text: 'S', value: 'S', length: 1, color: 'letter'},
            {text: 'D', value: 'D', length: 1, color: 'letter'},
            {text: 'F', value: 'F', length: 1, color: 'letter'},
            {text: 'G', value: 'G', length: 1, color: 'letter'},
            {text: 'H', value: 'H', length: 1, color: 'letter'},
            {text: 'J', value: 'J', length: 1, color: 'letter'},
            {text: 'K', value: 'K', length: 1, color: 'letter'},
            {text: 'L', value: 'L', length: 1, color: 'letter'},
            {text: 'Ñ', value: 'Ñ', length: 1, color: 'letter'},
            {text: '+', value: '+', length: 1, color: 'letter'},
            {text: '-', value: '-', length: 1, color: 'letter'},
            {text: 'PALABRA', value: null, length: 3, color: 'toggle'}
        ],
        [
            {text: 'Z', value: 'Z', length: 1, color: 'letter'},
            {text: 'X', value: 'X', length: 1, color: 'letter'},
            {text: 'C', value: 'C', length: 1, color: 'letter'},
            {text: 'V', value: 'V', length: 1, color: 'letter'},
            {text: 'B', value: 'B', length: 1, color: 'letter'},
            {text: 'N', value: 'N', length: 1, color: 'letter'},
            {text: 'M', value: 'M', length: 1, color: 'letter'},
            {text: ',', value: ',', length: 1, color: 'letter'},
            {text: '.', value: '.', length: 1, color: 'letter'},
            {text: ':', value: ':', length: 1, color: 'letter'},
            {text: '', value: null, length: 5, color: 'disabled'}

        ],
        [
            {text: '<', value: '&&cursorMoveLeft', length: 1, color: 'navigation'},
            {text: '>', value: '&&cursorMoveRight', length: 1, color: 'navigation'},
            {text: '', value: null, length: 2, color: 'disabled'},
            {text: 'ESPACIO', value: ' ', length: 6, color: 'letter'},
            {text: 'HABLAR', value: null, length: 5, color: 'success'}
        ]
    ]
};
