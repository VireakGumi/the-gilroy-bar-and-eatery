<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CareerController extends Controller
{
 public function career()
    {
        $data = [
            'benefits' => [
                [
                    'title' => 'Exceptional Training',
                    'description' => 'We invest in our team with comprehensive training programs and opportunities for professional growth.'
                ],
                [
                    'icon' => 'fas fa-heart',
                    'title' => 'Great Benefits',
                    'description' => 'Competitive compensation, health insurance, meal discounts, and a positive work environment.'
                ],
                [
                    'icon' => 'fas fa-rocket',
                    'title' => 'Career Growth',
                    'description' => 'Opportunities for advancement within our growing restaurant group and hospitality network.'
                ]
            ],
            'departments' => [
                [
                    'positions' => [
                        [
                            'title' => 'Sous Chef',
                            'icon' => 'fas fa-user-chef',
                            'type' => 'Full-time',
                            'description' => "We're looking for an experienced Sous Chef to assist our Head Chef in managing our kitchen operations and maintaining our high culinary standards.",
                            'requirements' => [
                                'Minimum 3 years experience in fine dining',
                                'Strong leadership and communication skills',
                                'Knowledge of Italian cuisine preferred'
                            ]
                        ],
                        [
                            'title' => 'Line Cook',
                            'icon' => 'fas fa-utensil-spoon',
                            'type' => 'Full-time',
                            'description' => 'Join our kitchen team as a Line Cook, preparing dishes with precision and consistency in a fast-paced environment.',
                            'requirements' => [
                                '1+ years experience in restaurant kitchen',
                                'Ability to work in a team environment',
                                'Flexibility to work evenings and weekends'
                            ]
                        ]
                    ]
                ],
                [
                    'positions' => [
                        [
                            'title' => 'Server',
                            'icon' => 'fas fa-user-tie',
                            'type' => 'Full-time/Part-time',
                            'description' => "We're seeking experienced servers who can provide exceptional dining experiences for our guests with attention to detail and professionalism.",
                            'requirements' => [
                                '2+ years fine dining experience',
                                'Extensive wine and cocktail knowledge',
                                'Excellent communication skills'
                            ]
                        ],
                        [
                            'title' => 'Bartender',
                            'icon' => 'fas fa-cocktail',
                            'type' => 'Full-time',
                            'description' => 'Join our bar team as a creative and skilled bartender to craft exceptional cocktails and provide memorable experiences for our guests.',
                            'requirements' => [
                                '2+ years craft cocktail experience',
                                'Knowledge of classic and modern techniques',
                                'Engaging personality and guest-focused attitude'
                            ]
                        ]
                    ]
                ],
                [
                    'positions' => [
                        [
                            'title' => 'Restaurant Manager',
                            'icon' => 'fas fa-user-cog',
                            'type' => 'Full-time',
                            'description' => "We're looking for an experienced Restaurant Manager to oversee daily operations and ensure exceptional guest experiences.",
                            'requirements' => [
                                '3+ years restaurant management experience',
                                'Strong leadership and problem-solving skills',
                                'Knowledge of inventory and financial management'
                            ]
                        ]
                    ]
                ]
            ],
            'testimonials' => [
                [
                    'quote' => 'Working at Gilroy has been transformative for my career. The training I received and the opportunities for growth have been exceptional.',
                    'name' => 'Maria Rodriguez',
                    'position' => 'Sous Chef',
                    'duration' => '2 years'
                ],
                [
                    'quote' => 'The team environment at Gilroy is like no other. We support each other and work together to create amazing experiences for our guests.',
                    'name' => 'James Wilson',
                    'position' => 'Lead Bartender',
                    'duration' => '3 years'
                ],
                [
                    'quote' => 'I started as a server and have been promoted twice in three years. Gilroy truly invests in developing their team members.',
                    'name' => 'Sophie Chen',
                    'position' => 'Floor Manager',
                    'duration' => '3 years'
                ]
            ],
            'allPositions' => [
                'Sous Chef',
                'Line Cook',
                'Server',
                'Bartender',
                'Restaurant Manager'
            ]
        ];

        return view('career', $data);
    }


}
