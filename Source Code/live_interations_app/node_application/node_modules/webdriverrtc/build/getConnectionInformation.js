'use strict';

Object.defineProperty(exports, "__esModule", {
    value: true
});
exports.default = getConnectionInformation;

var _webdriverio = require('webdriverio');

/**
 * get connection information
 * simple command that returns the connection information we saved when running startAnalyzing
 */
function getConnectionInformation() {
    if (!this.connection) {
        throw new _webdriverio.ErrorHandler('CommandError', 'No information got recoreded yet. Please run the startAnalyzing command first');
    }

    return this.connection;
};
module.exports = exports['default'];
