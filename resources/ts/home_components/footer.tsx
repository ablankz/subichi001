import React from 'react';
import ReactDOM from 'react-dom';
import { makeStyles } from '@material-ui/core/styles';
import IconAvatars from "./avatars";
import VariantButtonGroup from "./variant_button_group";

const useStyles=makeStyles({
    whole:{
        width:'100%',
        height:'25rem',
        display:'flex',
        flexDirection:'column',
        justifyContent:'space-around',
        alignItems:'center',
    },
    tops:{
        width:'100%',
        height:'25rem',
        backgroundColor:'#212121',
        display:'flex',
        flexDirection:'column',
        justifyContent:'space-around',
        alignItems:'center',
    },
    cent:{
        width:'100%',
        height:'5rem',
        backgroundColor:'#353535',
        display:'flex',
        flexDirection:'column',
        justifyContent:'space-around',
        alignItems:'center',  
    },
    foot:{
        width:'100%',
        height:'25rem',
        display:'flex',
        flexDirection:'column',
        justifyContent:'space-around',
        alignItems:'center',
    },
    logo:{
        color:'white',
        display:'flex',
        justifyContent:'center',
        alignItems:'center',
        height:'8rem',
        width:'100%',
        '& img':{
            height:'85%',
        }
    },
});

const Footer:React.FC=()=>{
    const classes=useStyles();
    return(
        <div className={classes.whole}>
        {/*<div className={classes.tops}>
        </div>
        <div className={classes.cent}>
        </div>*/}
        <div className={classes.foot}>
            <div className={classes.logo}>
                <img src={'images/base/sub3.png'} />
            </div>
            <VariantButtonGroup  />
            <IconAvatars />
            <br />
            </div>
        </div>
        );
}

export default Footer;