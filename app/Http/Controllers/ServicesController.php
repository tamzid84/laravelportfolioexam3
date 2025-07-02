<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $myServices = [
            [
                'icon' => "fas fa-paint-brush fa-lg",
                'title' =>'Web Development',
                'short_description' =>'Beautiful, user-friendly designs that reflect your brand and engage your audience effectively.',
                'service1' =>'Responsive Design',
                'service2' =>'CMS Integration',
                'service3' =>'E-commerce Solutions'
            ],
            [
                'icon' => "fas fa-paint-brush fa-lg",
                'title' =>'Web Design',
                'short_description' =>'Beautiful, user-friendly designs that reflect your brand and engage your audience effectively.',
                'service1' =>'UI/UX Design',
                'service2' =>'Wireframing',
                'service3' =>'Prototyping'
            ],
            [
                'icon' => "fas fa-mobile-alt fa-lg",
                'title' =>'Mobile App Development',
                'short_description' =>'Cross-platform mobile applications that work seamlessly on both iOS and Android devices.',
                'service1' =>'React Native',
                'service2' =>'Flutter',
                'service3' =>'Native Development'
            ],
            [
                'icon' => "fas fa-search-dollar fa-lg",
                'title' =>'SEO Optimization',
                'short_description' =>'Improve your website visibility on search engines and drive more organic traffic to your business.',
                'service1' =>'Keyword Research',
                'service2' =>'On-page SEO',
                'service3' =>'Technical SEO'
            ],
            [
                'icon' => "fas fa-bullhorn fa-lg",
                'title' =>'Digital Marketing',
                'short_description' =>'Comprehensive digital marketing strategies to increase your online presence and customer engagement.',
                'service1' =>'Social Media',
                'service2' =>'Content Marketing',
                'service3' =>'Email Campaigns'
            ],
            [
                'icon' => "fas fa-headset fa-lg",
                'title' =>'Support & Maintenance',
                'short_description' =>'Ongoing support and maintenance to keep your website running smoothly and securely.',
                'service1' =>'Regular Updates',
                'service2' =>'Security Patches',
                'service3' =>'Performance Optimization'
            ],
        ];

        return view('services',compact('myServices'));
    }
}
