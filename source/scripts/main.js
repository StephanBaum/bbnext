'use strict';

import './partials/cursor';
import './partials/magnetize';

/*
 * GSAP ..
 */
var window = {}
  , navigator = { userAgent: "" }
  , dummyElement = { style: {}, getElementsByTagName: function() { return [] } }
  , document = { createElement: function() { return dummyElement } };

// START OF FILE

// END OF FILE

module.exports = _gsScope;

/*
 * END GSAP ..
 */



/*
 * Importing functions ..
 */

import featureDetection from './partials/featureDetection';



/*
 * .. and executing them
 */

featureDetection();
