import React, { Component } from "react";
import DataTable from "../components/DataTable";

export default class MenuTable extends Component {
    constructor(props) {
        super(props);
    }

    render() {
        const columns = [
            {'name': 'id', 'label': 'ID'},
            {'name': 'name', 'label': 'Name', callback: function (data) {
                return <a href="#">{data}</a>;
            }},
            // {'name': 'slug', 'label': 'Slug'},
            {'name': 'description', 'label': 'Description'}
        ];

        return (
            <DataTable url="/api/v1/menus" columns={columns} />
        );
    }
}
