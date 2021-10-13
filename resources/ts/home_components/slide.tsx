import React,{useState,useRef,useEffect} from 'react';
import ReactDOM from 'react-dom';

import Slider from "react-slick";
import slickNext from "react-slick";
import slickPrev from "react-slick";
import "slick-carousel/slick/slick.css";
import "slick-carousel/slick/slick-theme.css";
import { makeStyles } from '@material-ui/core/styles';

import ImageList from '@material-ui/core/ImageList';
import ImageListItem from '@material-ui/core/ImageListItem';
import ImageListItemBar from '@material-ui/core/ImageListItemBar';
import ListSubheader from '@material-ui/core/ListSubheader';
import IconButton from '@material-ui/core/IconButton';
import InfoIcon from '@material-ui/icons/Info';

const useStyles=makeStyles({
   slider:{
       width:'100%',
       height:'100%',
       padding:'0.5rem',
       borderRadius:'16px',
        '& img':{
               height:'100%',
               width:'100%',
               borderRadius:'16px',
               boxShadow:' 0 10px 12px 0 rgba(24,31,51,0.63)',
         },   
   },
   title:{
        width:'100%',
        height:'5rem',
   },
   icon :{
        color: 'rgba(255, 255, 255, 0.54)',
    },
   slideImg:{
       width:'100%',
       justifyContent:'center',
       height:'80%',
               borderRadius:'16px',
      '& div':{
          width:'100%',
          height:'100%',
          display:'flex',
          alignItems:'center',
        　 borderRadius:'16px',
           '& .slick-slide':{
               height:'100%',
           },
           '& .slick-current':{
               height:'100%',
           }
       },
       '& .MuiImageListItemBar-positionBottom':{
           borderRadius:'0 0 16px 16px',
           height:'30%',
           width:'100%',
       },
       '& .slick-dots':{
           bottom:'-2.5rem',
            '& button:before':{
                color:'rgba(97,128,89,0.88)',
            },
       },
       '& .slick-prev:before':{
            fontSize:'3.5rem',
            color:'rgba(142,78,201,0.67)',
       },
       '& .slick-next:before':{
            fontSize:'3.5rem',
            color:'rgba(142,78,201,0.67)',
       },
       '& .MuiImageListItemBar-titleWrap':{
           paddingLeft:'3rem',
           paddingTop:'0.5rem',
           paddingBottom:'0.5rem',
           marginLeft:0,
           flexDirection:'column',
           width:'70%',
           alignItems:'center',
           JustifyContent:'center',
       },
       '& .MuiImageListItemBar-actionIcon':{
           width:'30%',
           paddingLeft:'10%',
           JustifyContent:'center',
       },
       '& .MuiImageListItemBar-title':{
           fontSize:'2rem',
           textAlign:'center',
       },
       '& .MuiImageListItemBar-subtitle':{
           paddingLeft:'3rem',
           '& span':{
               fontSize:'1rem',
           }
       },
       '& .MuiSvgIcon-root':{
           width:'2rem',
           height:'2rem',
           fontSize:'2.4rem',
       }
   },
   slickPrev:{
       left:0,
       zIndex:99,
   },
   slickNext:{
       right:'2.3rem',
       zIndex:99,
   },
   contener:{
       listStyle:'none',
       height:'100%',
       width:'100%',
       borderRadius:'16px',
       boxShadow:' 0 10px 12px 0 rgba(24,31,51,0.63)',
   },
   is_active:{
        transform: 'scale( 1 )',
   },
   no_active:{
        WebkitTransition: '0.2s ease-in-out',
        MozTransform:'0.2s ease-in-out',
        MsTransform:'0.2s ease-in-out',
        OTransform:'0.2s ease-in-out',
        transition:'0.2s ease-in-out',
        transform: 'scale( .85 )',
   },
});

const images  = [
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

const Slide:React.FC=()=>{
    const num :number=images.length;
    const customSlider = React.useRef<Slider | null>(null!);
    const customElement = customSlider.current;
    const classes=useStyles();
    const [value, setValue] = React.useState<any>({currentSlide: 0});
    const [auto, setAuto] = React.useState<boolean>(true);
    const [second, setSecond] = React.useState<number>(1);
    const Prev:React.FC = () => {
        const classes=useStyles();
        return (
            <button
          className={'slick-prev'+' '+`${classes.slickPrev}`}
          onClick={() =>
                {
                  if(customElement) {
                      if(!value.currentSlide){
                            customElement.slickGoTo(num-1,true); 
                        }else{
                            customElement.slickPrev();
                        }
                  }
                }
            }
        >
        </button>
            )
    }
    const Next:React.FC = () => {
            const classes=useStyles();
        return (
                <button 
                className={'slick-next'+' '+`${classes.slickNext}`}
                onClick={() =>
              {
                  if(customElement) {
                    customElement.slickNext();
                  }
              }
          }
          >
          </button>
            )
    }
    useEffect(()=> {
        if(auto) setSecond(4000);
        setAuto(false);
    });
    const settings = {
          centerMode: true,
          centerPadding:'5%',
          focusOnSelect: true,
          infinite: true,
          autoplay:true,
          autoplaySpeed:second,
          speed:500,
          slidesToShow: 3,
          dots: true,
          afterChange: (index :number) => {
              setValue({ currentSlide: index });
          },
          arrows: true,
          prevArrow: <Prev />,
          nextArrow: <Next />,
 　　       responsive: [
            {
              breakpoint: 768,
              settings: {
                dots: false,
                arrows: false,
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
       <Slider {...settings} className={classes.slideImg} ref={customSlider}>
          {images.map((img,i)=>(
                <div key={i} className={classes.slider}>
                    <ImageListItem className={`${classes.contener}`+' '+(i===value.currentSlide ? `${classes.is_active}` : `${classes.no_active}`)}>
                     <img src={img.img} alt={img.title} />
                    <ImageListItemBar
                      title={img.title}
                      subtitle={<span>by: {img.author}</span>}
                      className={classes.title}
                      actionIcon={
                        <IconButton aria-label={`info about ${img.title}`} className={classes.icon}>
                          <InfoIcon />
                        </IconButton>
                      }
                    />
                    </ImageListItem>
                </div>
          ))}
       </Slider>
        )
}

export default Slide;