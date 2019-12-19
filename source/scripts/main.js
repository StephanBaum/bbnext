'use strict';

import { gsap } from "gsap";
import { paperjs } from "paper";

import './partials/cursor';
import './partials/magnetize';

import './navigation/navigation';

/*
 * Importing functions ..
 */
import featureDetection from './partials/featureDetection';


/*
 * .. and executing them
 */
featureDetection();
