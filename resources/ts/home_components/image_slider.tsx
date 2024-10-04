import React from "react";
import ReactDOM from 'react-dom';
import Slider from "react-slick";
import { makeStyles } from '@material-ui/core/styles';

import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";

const useStyles=makeStyles({
    parents:{
        width:'100%',
        '& img':{
            height:'15rem',
        }
    }
});

const Images  = [
        {
            img:'/images/subsc/amazon.jpg',
            title:'amzon',
            author:'author',
        },
        {
            img:'/images/subsc/desney.jpg',
            title:'amzon',
            author:'author',
        },
        {
            img:'/images/subsc/danime.jpg',
            title:'amzon',
            author:'author',
        },
        {
            img:'/images/subsc/amazon.jpg',
            title:'amzon',
            author:'author',
        },
        {
            img:'/images/subsc/desney.jpg',
            title:'amzon',
            author:'author',
        },
        {
            img:'/images/subsc/danime.jpg',
            title:'amzon',
            author:'author',
        },
        ];

export default function SimpleSlider() {
    const classes=useStyles();
    const settings = {
        infinite: true,
          focusOnSelect: true,
          speed:500,
          slidesToShow: 4,
        slidesToScroll: 1,
          arrows: true,
 　　       responsive: [
            {
              breakpoint: 768,
              settings: {
                dots: false,
                arrows: true,
                centerMode: true,
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                dots: false,
                arrows: false,
                centerMode: true,
                slidesToShow: 1
              }
            }
          ]

    };

  return (
      <>
      <h3>新着<span className="badge badge-secondary">New</span></h3>
    <Slider {...settings}>
        {Images.map((img,i)=>(
            <div className = {classes.parents} key={i}>
                <img src={img.img} />
            </div>
        ))}
    </Slider>
    </>
  );
}
