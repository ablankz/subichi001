import * as React from 'react';
import Avatar from '@mui/material/Avatar';
import Stack from '@mui/material/Stack';
import FolderIcon from '@mui/icons-material/Folder';
import PageviewIcon from '@mui/icons-material/Pageview';
import AssignmentIcon from '@mui/icons-material/Assignment';
import CallIcon from '@mui/icons-material/Call';
import EmailIcon from '@mui/icons-material/Email';
import Box from '@mui/material/Box';
import Button from '@mui/material/Button';


export default function IconAvatars() {
  return (
    <Box
      sx={{
        display: 'flex',
        flexDirection: 'column',
        alignItems: 'center',
        '& > *': {
          m: 1,
        },
      }}
    >
    <Stack direction="row" spacing={2}>
      <Avatar>
        <Button>
          <CallIcon />
        </Button>
      </Avatar>
      <Avatar>
        <Button>
          <EmailIcon />
        </Button>
      </Avatar>
      <Avatar>
        <Button>
          <FolderIcon />
        </Button>
      </Avatar>
      <Avatar >
        <Button>
          <PageviewIcon />
        </Button>
      </Avatar>
      <Avatar >
        <Button>
          <AssignmentIcon />
        </Button>
      </Avatar>
    </Stack>
    </Box>
  );
}