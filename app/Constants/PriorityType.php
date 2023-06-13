<?php


namespace App\Constants;


use ReflectionClass;

class PriorityType
{
    const URGENT = "URGENT";
    const IMPORTANT_NOT_URGENT = "IMPORTANT_NOT_URGENT";
    const NOT_IMPORTANT_BUT_URGENT = "NOT_IMPORTANT_BUT_URGENT";
    const NOT_IMPORTANT_OR_NOT_URGENT = "NOT_IMPORTANT_OR_NOT_URGENT";
    const NONE = "NONE";


    public static function options()
    {
        return (new ReflectionClass(get_called_class()))->getConstants();
    }


    public static function getIconForOption($priority)
    {
        $icon = '';
        switch ($priority):
            case PriorityType::IMPORTANT_NOT_URGENT:
            case PriorityType::URGENT:
                $icon ='<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                <g id="vuesax_bulk_flag" data-name="vuesax/bulk/flag" transform="translate(-236 -380)">
                                                    <g id="flag" transform="translate(236 380)">
                                                        <path id="Vector" d="M0,24.695V0" transform="translate(6.867 3.653)" fill="#292d32"/>
                                                        <path id="Vector-2" data-name="Vector" d="M17.711,11.582,16.08,9.962a1.842,1.842,0,0,1-.628-1.368,2.185,2.185,0,0,1,.655-1.634l1.6-1.594c1.39-1.381,1.911-2.71,1.47-3.759S17.431,0,15.479,0H.508A.526.526,0,0,0,0,.518V16.457a.506.506,0,0,0,.508.5H15.479c1.925,0,3.221-.584,3.663-1.634S19.075,12.95,17.711,11.582Z" transform="translate(6.336 4.834)" fill="rgba(234,58,61,0.4)"/>
                                                        <path id="Vector-3" data-name="Vector" d="M0,0H32V32H0Z" fill="none" opacity="0"/>
                                                        <path id="Vector-4" data-name="Vector" d="M1,26.687a1.006,1.006,0,0,1-1-1V1A1.006,1.006,0,0,1,1,0a1.006,1.006,0,0,1,1,1V25.686A1.006,1.006,0,0,1,1,26.687Z" transform="translate(5.868 2.656)" fill="#ea3a3d"/>
                                                    </g>
                                                </g>
                                            </svg>';
                break;

            case PriorityType::NOT_IMPORTANT_OR_NOT_URGENT:
            case PriorityType::NOT_IMPORTANT_BUT_URGENT:
                $icon =' <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
        <g id="vuesax_bulk_flag" data-name="vuesax/bulk/flag" transform="translate(-236 -380)">
          <g id="flag" transform="translate(236 380)">
            <path id="Vector" d="M0,24.68V0" transform="translate(6.867 3.66)" fill="#ff8500"/>
            <path id="Vector-2" data-name="Vector" d="M17.688,11.605,16.059,9.982a1.848,1.848,0,0,1-.627-1.371,2.193,2.193,0,0,1,.654-1.637l1.6-1.6C19.076,3.993,19.6,2.662,19.156,1.61S17.408,0,15.459,0H.507A.527.527,0,0,0,0,.519V16.49A.506.506,0,0,0,.507,17H15.459c1.922,0,3.217-.586,3.658-1.637S19.05,12.976,17.688,11.605Z" transform="translate(6.348 4.823)" fill="rgba(242,153,74,0.4)"/>
            <path id="Vector-3" data-name="Vector" d="M0,0H32V32H0Z" fill="none" opacity="0"/>
            <path id="Vector-4" data-name="Vector" d="M1,26.676a1.007,1.007,0,0,1-1-1V1A1.007,1.007,0,0,1,1,0,1.007,1.007,0,0,1,2,1V25.676A1.007,1.007,0,0,1,1,26.676Z" transform="translate(5.867 2.662)" fill="#f2994a"/>
          </g>
        </g>
      </svg>
      ';

            case PriorityType::NONE:
                $icon ='<svg id="flag" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
        <path id="Vector" d="M0,24.665V0" transform="translate(6.867 3.667)" fill="#ff8500"/>
        <path id="Vector-2" data-name="Vector" d="M17.664,11.629,16.038,10a1.854,1.854,0,0,1-.627-1.374,2.2,2.2,0,0,1,.653-1.64l1.6-1.6C19.051,4,19.571,2.667,19.131,1.614S17.384,0,15.438,0H.507A.527.527,0,0,0,0,.52v16a.506.506,0,0,0,.507.507H15.438c1.92,0,3.213-.587,3.653-1.64S19.024,13,17.664,11.629Z" transform="translate(6.361 4.812)" fill="#dcdcdc"/>
        <path id="Vector-3" data-name="Vector" d="M0,0H32V32H0Z" fill="none" opacity="0"/>
        <path id="Vector-4" data-name="Vector" d="M1,26.666a1.007,1.007,0,0,1-1-1V1A1.007,1.007,0,0,1,1,0,1.007,1.007,0,0,1,2,1V25.666A1.007,1.007,0,0,1,1,26.666Z" transform="translate(5.866 2.667)" fill="#dcdcdc"/>
        <path id="Vector-5" data-name="Vector" d="M15.113,24.294a.855.855,0,0,0,.474-.142.872.872,0,0,0,.273-1.221L1.637.411A.885.885,0,0,0,.416.138.872.872,0,0,0,.143,1.359l14.223,22.52A.863.863,0,0,0,15.113,24.294Z" transform="translate(5.865 1.564)" fill="#fff"/>
      </svg>';
                break;
            default:
                $icon ='';
        endswitch;
        return $icon;
    }



}


