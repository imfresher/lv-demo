import React from 'react';
import { createRoot } from 'react-dom/client';
import MenuTable from './backend/MenuTable';


if (document.getElementById('datatable')) {
    createRoot(document.getElementById('datatable')).render(<MenuTable />)
}
