import React, { Component } from 'react';

class TodoForm extends Component {
  constructor () {
    super();
    this.state = {
      priority: 'Leanding Page',
      CreateData: '',
      Active: '',
      StartData: '',
      EndData: '',
      CreatorEmail: '',
      DataAction: '',
      Id: '',
      ImageUrl: '',
      NumberOrder: '',
    };
    this.handleInputChange = this.handleInputChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleSubmit(e) {
    e.preventDefault();
    this.props.onAddTodo(this.state);
    this.setState({
      priority: 'Leanding Page',
      CreateData: '',
      Active: '',
      StartData: '',
      EndData: '',
      CreatorEmail: '',
      DataAction: '',
      Id: '',
      ImageUrl: '',
      NumberOrder: '',
    });
  }

  handleInputChange(e) {
    const {value, name} = e.target;
    console.log(value, name);
    this.setState({
      [name]: value
    });
  }

  render() {
    return (
      <div className="card">
        <form onSubmit={this.handleSubmit} className="card-body">
          <div className="form-group">
          <div className="form-group">
            <select
                name="priority"
                className="form-control"
                value={this.state.priority}
                onChange={this.handleInputChange}
              >
              <option>Leanding Page</option>
              <option>Idea</option>
              <option>Servicios</option>
              <option>Url</option>
              <option>Sku</option>
              <option>Void</option>
              <option>Webview</option>
            </select>
          </div>
            <input
              type="text"
              name="CreateData"
              className="form-control"
              value={this.state.title}
              onChange={this.handleInputChange}
              placeholder="CreateData"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="Active"
              className="form-control"
              value={this.state.responsible}
              onChange={this.handleInputChange}
              placeholder="Active"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="StartData"
              className="form-control"
              value={this.state.description}
              onChange={this.handleInputChange}
              placeholder="StartData"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="EndData"
              className="form-control"
              value={this.state.description}
              onChange={this.handleInputChange}
              placeholder="EndData"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="CreatorEmail"
              className="form-control"
              value={this.state.description}
              onChange={this.handleInputChange}
              placeholder="CreatorEmail"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="DataAction"
              className="form-control"
              value={this.state.description}
              onChange={this.handleInputChange}
              placeholder="DataAction"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="Id"
              className="form-control"
              value={this.state.description}
              onChange={this.handleInputChange}
              placeholder="Id"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="ImageUrl"
              className="form-control"
              value={this.state.description}
              onChange={this.handleInputChange}
              placeholder="ImageUrl"
              />
          </div>
          <div className="form-group">
            <input
              type="text"
              name="NumberOrder"
              className="form-control"
              value={this.state.description}
              onChange={this.handleInputChange}
              placeholder="NumberOrder"
              />
          </div>
          <button type="submit" className="btn btn-primary">
            Guardar
          </button>
        </form>
      </div>
    )
  }

}

export default TodoForm;