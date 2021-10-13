import React,{useState,useEffect} from 'react';
import ReactDOM from 'react-dom';
import { makeStyles } from '@material-ui/core/styles';
import Paper from '@material-ui/core/Paper';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

const useStyles = makeStyles({
  root: {
      width:'100%',
      height:'100%',
      flexGrow: 1,
  },
  tab_menu: {
      width:'100%',
      height:'100%',
  },
  tab:{
      textDecoration:'none',
      '&:hover':{
          textDecoration:'none',
      }
  }
});

export default function CenteredTabs() {
  const classes = useStyles();
  const [value, setValue] = React.useState(1);
  const locate = location.pathname;
  const tabs=[
        {
          link: '/timeline',
          label: 'タイムライン',
        },
        {
          link: '/',
          label: 'おすすめ',
        },
        {
          link: '/mypage',
          label: 'マイページ',
        },
    ];
    useEffect(()=> {
        const num:number=tabs.length;
        var loc:number=0;
        for(var i=0;i<num;++i){
            if(tabs[i].link===locate){
                loc=i;
            }
        }
        setValue(loc);
    });
  

  const handleChange = (event: React.ChangeEvent<{}>, newValue: number) => {
    setValue(newValue);
  };

  return (
    <Paper className={classes.root}>
      <Tabs
        value={value}
        onChange={handleChange}
        indicatorColor="primary"
        textColor="primary"
        className={classes.tab_menu}
        variant="fullWidth"
      >
      {tabs.map((tab,i)=>(
        <Tab label={tab.label} href={tab.link} className={classes.tab} key={i} />
        ))}
      </Tabs>
    </Paper>
  );
}