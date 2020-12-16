// Dummy data placeholder. Replace with array of actual data objects to come from Airtable 
const data = [{
    "project": "GLU-MESS",
    "stack": ["React"],
    "description": "Bureau opdracht",
    "website": "locale-opdrachten/GLU-MESS",
    "github": "https://github.com/Siluq/",
    "image": "https://i.stack.imgur.com/sHDyf.png",
    "needs": "Nothing",
    "status": "Locaal Geinstalleerd"
  },
  {
    "project": "My onw Database project",
    "stack": ["php"],
    "description": "Database opdracht",
    "website": "locale-opdrachten/modp/index.php",
    "github": "https://github.com/Siluq/",
    "image": "https://i.stack.imgur.com/sHDyf.png",
    "needs": "Nothing",
    "status": "Locaal Geinstalleerd"
  },
  {
    "project": "Database api",
    "stack": ["php"],
    "description": "Database opdracht",
    "website": "locale-opdrachten/api/product/read.php",
    "github": "https://github.com/Siluq/",
    "image": "https://i.stack.imgur.com/sHDyf.png",
    "needs": "Nothing",
    "status": "Locaal Geinstalleerd"
  },
  {
    "project": "WordPress OffSchool",
    "stack": ["html", "css"],
    "description": "Wordpress opdracht Project week periode 4",
    "website": "locale-opdrachten/offschool/index.php",
    "github": "https://github.com/Siluq/",
    "image": "https://i2.wp.com/getrichsleeping.nl/wp-content/uploads/2019/10/WordPress-logo.png?fit=2000%2C1080&ssl=1",
    "needs": "Nothing",
    "status": "Locaal Geinstalleerd"
  },
  {
    "project": "WordPress",
    "stack": ["ubuntu", "css"],
    "description": "View my wordpress site that is on my own ubuntu server",
    "website": "http://sam-boesjes.ddns.net/",
    "github": "https://github.com/Siluq/",
    "image": "https://i2.wp.com/getrichsleeping.nl/wp-content/uploads/2019/10/WordPress-logo.png?fit=2000%2C1080&ssl=1",
    "needs": "Nothing",
    "status": "Live"
  },
  {
    "project": "Hotel Website",
    "stack": ["html", "css"],
    "description": "Hier is de Hotel Website ",
    "website": "locale-opdrachten/hotel-website/index.php",
    "github": "https://github.com/Siluq/GLU-HotelWebsite",
    "needs": "People with super powers, semi-super powers, or no powers at all",
    "image": "https://i.imgur.com/z2wqfqn.jpg",
    "status": "Live locaal"
  },
  {
    "project": "Eindopdracht Web",
    "stack": ["html", "css"],
    "description": "Eindopdracht Web periode 3",
    "website": "locale-opdrachten/web-eindopdracht/index.html",
    "github": "https://github.com/Siluq/Web",
    "image": "https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png",
    "needs": "Nothing",
    "status": "Locaal Live"
  },
  {
    "project": "Sams Snacks",
    "stack": ["css", "html", "php"],
    "description": "Hier moest ik een webshop maken. ",
    "website": "locale-opdrachten/sams-snacks/index.html",
    "github": "https://github.com/Siluq/Sams-snacks",
    "image": "https://static.thuisbezorgd.nl/images/restaurants/nl/NNO33RO/logo_465x320.png",
    "needs": "People with super powers",
    "status": "Live locaal"
  },

  {
    "project": "Calculator",
    "stack": ["js", "html", "css"],
    "description": "Funny calculator. ",
    "website": "locale-opdrachten/calculator/index.html",
    "github": "https://github.com/Siluq/JS-Calculator",
    "needs": "People with super powers, semi-super powers, or no powers at all",
    "image": "https://i0.wp.com/btwjurisprudentie.nl/wp-content/uploads/2016/09/btw-calculator.jpg?fit=1280%2C853&ssl=1",
    "status": "Live locaal"
  },
  {
    "project": "Piano",
    "stack": ["js", "css", "html"],
    "description": "My piano ",
    "website": "locale-opdrachten/piano/piano.html",
    "github": "https://github.com/Siluq/JS-Piano",
    "image": "https://i1.wp.com/www.muzikc.nl/wp-content/uploads/2019/08/image1.jpeg?fit=669%2C390",
    "needs": "People with super powers",
    "status": "Live locaal"
  },

  {
    "project": "Pixel art",
    "stack": ["js", "html", "css"],
    "description": "Some pixel art. ",
    "website": "locale-opdrachten/pixel-art/index.html",
    "github": "https://github.com/Siluq/Pixel-art",
    "needs": "People with super powers, semi-super powers, or no powers at all",
    "image": "https://i.pinimg.com/originals/7e/06/1c/7e061c5e6cc5ee0e73c34ecb5a00f350.png",
    "status": "Live locaal"
  }
];



function Layout(props) {
  return (
    React.createElement("div", {
      className: "row"
    }, props.children));

}

class Card extends React.Component {
  render() {
    const style = {
      img: {
        maxWidth: "2200px",
        maxHeight: "180px"
      }
    };


    return (
      React.createElement("div", {
          className: "col m4"
        },
        React.createElement("div", {
            className: "card hoverable"
          },
          React.createElement("div", {
              className: "card-image waves-effect waves-block waves-light"
            },
            React.createElement("img", {
              style: style.img,
              className: "activator",
              src: this.props.data.image
            })),

          React.createElement("div", {
              className: "card-content"
            },
            React.createElement("div", null,
              React.createElement(StackIcons, {
                data: this.props.data.stack
              })),

            React.createElement("span", {
                className: "card-title activator grey-text text-darken-4"
              },
              this.props.data.project,
              React.createElement("i", {
                className: "material-icons right"
              }, "more_vert")),

            React.createElement("div", null,
              React.createElement("span", null, React.createElement("a", {
                href: this.props.data.website
              }, "Website")),
              React.createElement("span", null, React.createElement("a", {
                className: "github",
                href: this.props.data.github
              }, "Github")))),


          React.createElement("div", {
              className: "card-reveal"
            },
            React.createElement("span", {
              className: "card-title grey-text text-darken-4"
            }, this.props.data.project, React.createElement("i", {
              className: "material-icons right"
            }, "close")),
            React.createElement("div", null, React.createElement("span", {
              className: "status"
            }, this.props.data.status)),
            React.createElement("p", null, this.props.data.description),
            React.createElement("p", null, React.createElement("strong", null, "Need:")),
            React.createElement("p", null, this.props.data.needs)))));




  }
}


// Note: Empty span tag on line 115 is there as placeholder for
// the custom CSS to inject text based on stack item.
function StackIcons(props) {
  const array = props.data;
  const icons = array.map(item => {
    return (
      React.createElement("div", {
          key: item,
          className: "icon"
        },
        React.createElement("span", {
          className: item
        }, React.createElement("span", null))));


  });
  return (
    React.createElement("div", null, " ", icons, " "));

}

function Projects(props) {
  const projects = [];
  const data = props.data;
  data.forEach(item => {
    projects.push(React.createElement(Card, {
      data: item
    }));
  });
  return (
    React.createElement("div", null, projects));

}

ReactDOM.render(
  React.createElement(Layout, {
    children: React.createElement(Projects, {
      data: data
    })
  }),
  document.getElementById('root'));