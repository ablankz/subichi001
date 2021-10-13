import React from "react";
import ReactDOM from 'react-dom';
import { makeStyles } from '@material-ui/core/styles';
import SimpleSlider from "./image_slider";

const useStyles=makeStyles({
    whole:{
        width:'100%',
        height:'100%',
        paddingLeft:'2rem',
    }
});

export default function Gift() {
  const classes = useStyles();

  return (
      <div className={classes.whole}>
        <SimpleSlider />
        <SimpleSlider />
        <SimpleSlider />
        <SimpleSlider />
        <SimpleSlider />
      </div>
  );
}