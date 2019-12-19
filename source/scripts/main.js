'use strict';

import { gsap } from "gsap";
gsap.registerPlugin(gsap);

// import { paper } from "paper";

import './partials/cursor';
import './partials/navigation/navigation';
// import './partials/page-transitions';

/*
 * Importing functions ..
 */
import featureDetection from './partials/featureDetection';

/*
 * .. and executing them
 */
featureDetection();
